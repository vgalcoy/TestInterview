<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Chart_Model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();		
    }

   
    public function getCheck()
    {
        $user= $this->db->query("SELECT * from store_area");
        return $user->result();
    }

    public function getData()
    {
        $i = 1;
        $gitar = $this->db->query("SELECT product_brand.brand_name as brand_namee,
        round(SUM( IF(store_area.area_id = 1, `compliance`, 0) ) / 60 * 100 ,'%') AS DKIJakarta,
        round(SUM( IF(store_area.area_id = 2, `compliance`, 0) ) / 60 * 100 ,'%') AS JawaBarat,
        round(SUM( IF(store_area.area_id = 3, `compliance`, 0) ) / 60 * 100 ,'%') AS Kalimantan,
        round(SUM( IF(store_area.area_id = 4, `compliance`, 0) ) / 60 * 100 ,'%') AS JawaTengah,
        round(SUM( IF(store_area.area_id = 5, `compliance`, 0) ) / 60 * 100 ,'%') AS Bali
        from report_product join store on store.store_id = report_product.store_id join store_area on store_area.area_id = store.area_id join product on product.product_id = report_product.product_id join product_brand on product.brand_id = product_brand.brand_id GROUP BY brand_name ");
        
        foreach($gitar->result() as $rowa) {
                     
            $row = array();
            $row[] = $rowa->brand_namee;
            $row[] = $rowa->DKIJakarta.'%';
            $row[] = $rowa->JawaBarat.'%';
            $row[] = $rowa->Kalimantan.'%';
            $row[] = $rowa->JawaTengah.'%';            
            $row[] = $rowa->Bali.'%';


            $data['data'][] = $row;
            $i++;
        }
        echo json_encode($data);
    }


    
}
