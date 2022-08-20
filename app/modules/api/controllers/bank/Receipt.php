<?php

require APPPATH . '/third_party/RestController.php';
require APPPATH . '/third_party/Format.php';

use chriskacerguis\RestServer\RestController;

class Receipt extends RestController
{


//    protected $receipt_type = [ 'BANK'=>'Bank Receipt', 'OFFICE'=> 'Office Receipt', 'ONLINE'=>'Online Receipt' ];
//
    protected $receipt_type = [ ['code'=>'BANK', 'name'=>'Bank Receipt', 'description'=>'Printed on Bank generated deposit slip'],
        ['code'=>'OFFICE', 'name'=>'Office Receipt', 'description'=>'Generated by office, printed on official receipt slip'],
        ['code'=>'ONLINE', 'name'=>'Online Receipt', 'description'=>'Generated online, printed on white paper'] ];

    protected $methods = [
        'index_get' => ['level' => 1, 'limit' => 1000],
        'types_get' => ['level' => 1, 'limit' => 1000],
        'list_get' => ['level' => 1, 'limit' => 1000],
    ];


    public function index_get()
    {
        $receipt_id = $this->input->get_post('receipt_number') ? $this->input->get_post('receipt_number') : null;
//        TODO implement $receipt_type check
//        $receipt_type = $this->input->get_post('receipt_type') ? $this->input->get_post('receipt_type') : null;
//        if($receipt_type && ($receipt_type != 'BANK')){
//
//            $this->response([
//                'status' => FALSE,
//                'data' =>['receipt_type'=>$receipt_type, 'receipt_number'=>$receipt_id],
//                'message' => 'Receipt Type code must be OFFICE or ONLINE'
//            ], RestController::HTTP_BAD_REQUEST);
//            exit;
//        }

/*        $recepit_date = date("d/m/Y", strtotime($dataRow->recepit_date));
        $start_date = date("d/m/Y", strtotime($dataRow->start_date));
        $finish_date = date("d/m/Y", strtotime($dataRow->finish_date));*/

        $this->db->select("
        A.id, A.recepit_number as receipt_number, DATE_FORMAT(A.created_at,'%d-%m-%Y') as receipt_date, 
        A.start_date, A.finish_date, A.month_period, A.total_amount, IF(A.approved IS false, 'UNPAID', 'PAID') as status,
        
        B.id AS member_id, B.membership_number, B.member_name, B.mobile_number as member_mobile_number");
        $this->db->from("receipt AS A");
        $this->db->join('members AS B', 'A.member_id=B.id', 'left');
        $this->db->where(['A.recepit_number'=>$receipt_id]);
        $receipt = $this->db->get()->result();


        if($receipt){
            $this->response([
                'status' => TRUE,
                'data' => $receipt
            ], RestController::HTTP_OK);
        } else {
            $this->response([
                'status' => FALSE,
                'data' => $receipt_id,
                'message' => 'Could not find any receipt '.$receipt_id
            ], RestController::HTTP_NOT_FOUND);
        }
    }


    public function types_get()
    {
        $this->response([
            'status' => TRUE,
            'data' => $this->receipt_type
        ], RestController::HTTP_OK);

    }

    public function list_get()
    {
        $this->response([
            'status' => TRUE,
            'data' => $this->receipt_type
        ], RestController::HTTP_OK);

    }

}