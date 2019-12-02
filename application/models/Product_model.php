<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends MY_Model {

	public function all()
	{
		$this->load->library('datatables');
		$this->datatables->select('id')
		->select('name')
		->select('price')
		->select('description')
		->select('category')
		->select('status')
		->from('products');
		$this->datatables->add_column(
			"Actions",
			"<div class='text-center'>
				<div class='btn-group'>
					<a href='" . base_url('product/edit/$1') . "' class='edit tip btn btn-warning btn-xs' title='update'><i class='fa fa-edit'></i></a>
				</div>
			</div>",
			"id"
		);
		$this->datatables->unset_column('id');
		return $this->datatables->generate();
	}

	function createProduct($data,$dtPrice){
	    //insert product
        $this->insert('products', $data);
        $insertId = $this->db->insert_id();
        $cnt = count($dtPrice["size"]);
        // insert price list
        for($i=0; $i<$cnt;$i++) {
            $size = 0;
            if($dtPrice["size"][$i]=="Piccolo"){
                $size = 1;
            }else if($dtPrice["size"][$i]=="Grande"){
                $size = 2;
            }else if($dtPrice["size"][$i]=="Reqular"){
                $size = 3;
            }
            $dp=array(
                "product_id" =>$insertId ,
                "size" => $size,
                "cost" => $dtPrice["cost"][$i],
                "price" => $dtPrice["price"][$i],
            );
            $this->insert("product_prices",$dp);
        }

        return array('status' => 1);


        /*$product_price = array(
            array('product_id' =>$insertId ,
                'size'=> $this->input->post('size')[0],
                'cost'=>$this->input->post('cost')[0],
                'price'=>$this->input->post('price')[0],
                'status'=>($this->input->post('status') == 'on') ? 1 : 0
            ),
            array('product_id' =>$insertId ,
                'size'=> $this->input->post('size')[1],
                'cost'=>$this->input->post('cost')[1],
                'price'=>$this->input->post('price')[1],
                'status'=>($this->input->post('status') == 'on') ? 1 : 0
            ),
            array('product_id' =>$insertId ,
                'size'=> $this->input->post('size')[2],
                'cost'=>$this->input->post('cost')[2],
                'price'=>$this->input->post('price')[2],
                'status'=>($this->input->post('status') == 'on') ? 1 : 0
            )
        );
        if ($this->input->post('price')[0]==null) {
            unset($product_price[0]);
        }
        if ($this->input->post('price')[1]==null) {
            unset($product_price[1]);
        }
        if ($this->input->post('price')[2]==null) {
            unset($product_price[2]);
        }
        $message = ($this->db->insert_batch('product_prices', $product_price) > 0) ? array('status' => 1) : array('status' => 0);
        echo json_encode($message);*/
    }
    // checking existing
    function existing($id,$size_id){
        $this->db->select("*")
            ->from("product_prices")
            ->where("product_id",$id)
            ->where("size",$size_id);
        $q = $this->db->get();
        return $q->num_rows();

    }
    // update price list
    function updatePrice($data,$id,$size){
        $this->db->where("product_id",$id);
        $this->db->where("size",$size);
        $this->db->update("product_prices",$data);
    }
    // update product/price list
    function ProductUpdate($data,$dtPrice,$id=0){
        //update product
        $this->update('products', $data, 'id', $id);
        // update status product price
        $this->update('product_prices', ["status"=>0], 'product_id', $id);
        // count items
        $cnt = count($dtPrice["size"]);
        //loop
        for($i=0; $i<$cnt;$i++) {
            $size = 0;
            if($dtPrice["size"][$i]=="Piccolo"){
                $size = 1;
            }else if($dtPrice["size"][$i]=="Grande"){
                $size = 2;
            }else if($dtPrice["size"][$i]=="Reqular"){
                $size = 3;
            }
            // checking existing
            if(self::existing($id,$size)>0){
                $dpup=array(
                    "cost" => $dtPrice["cost"][$i],
                    "price" => $dtPrice["price"][$i],
                    "status" => 1,
                );
                //update existing
                self::updatePrice( $dpup, $id,$size);
            }else {
                $dp = array(
                    "product_id" => $id,
                    "size" => $size,
                    "cost" => $dtPrice["cost"][$i],
                    "price" => $dtPrice["price"][$i],
                );
                // insert price list
                $this->insert("product_prices", $dp);
            }
        }

        return array('status' => 1);

    }

    function getPriceList($prodId=0){
        $result = $this->db->select('id, max(s1) as s1,max(s2) as s2,max(s3) as s3, max(p1) as p1,max(p2) as p2,max(p3) as p3 ')
            ->from('(select
                        product_id as id, 
                        max(if(size=1,cost,0)) as s1,
                        max(if(size=2,cost,0)) as s2,
                        max(if(size=3,cost,0)) as s3,
                        
                        max(if(size=1,price,0)) as p1,
                        max(if(size=2,price,0)) as p2,
                        max(if(size=3,price,0)) as p3 
                    
                    from product_prices
                    where product_id='.$prodId.'
                    and status = 1
                    group by product_id,size,price) v
              ')->get()->row();
        return $result;
    }
}