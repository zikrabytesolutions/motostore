<?php

class Cart extends CI_Controller
 {

    function __construct() 
 {
   
        parent::__construct();

        $this->load->model( 'cartModel' );
    }

    function index()
 {
        $data['proinfo'] = $this->cart->contents();
        $this->load->view( 'cart', $data );
    }

    function cartlist()
 {
        $proid = $this->input->post( 'proid' );
        $prodetailsid = $this->input->post( 'prodetailsid' );

        $proid = base64_decode( strtr( $proid, '-_', '+/' ) );
        $prodetailsid = base64_decode( strtr( $prodetailsid, '-_', '+/' ) );
        $data = $this->cartModel->findproductdetails( $proid, $prodetailsid );
        $datas = array(
            'id'      =>  $data['id'],
            'proid'      =>  $data['proid'],
            'qty'     => 1,
            'price'   =>$data['offer_price'],
            'name'    => 'Moto Store',

        );
        $this->cart->insert( $datas );
        return redirect( 'cart' );
    }

    function findcartvalue( $proid, $detailsid )
 {

        return $this->cartModel->showtempcartvalue( $proid, $detailsid );
    }

    function delete( $rowid )
 {
        $data = array(
            'rowid'   => $rowid,
            'qty'     => 0
        );

        $success = $this->cart->update( $data );
        if ( $success )
 {
            return redirect( 'cart' );
        }

    }

    function findattributecart( $data )
 {
        return $this->cartModel->attributefind( $data );
    }

    function addcart( $rowid, $qty )
 {
        $data = array(
            'rowid'   => $rowid,
            'qty'     =>$qty+1,
        );

        $success = $this->cart->update( $data );
        if ( $success )
 {
            return redirect( 'cart' );
        }

    }

    function mincart( $rowid, $qty )
 {
        $data = array(
            'rowid'   => $rowid,
            'qty'     =>$qty-1,
        );

        $success = $this->cart->update( $data );
        if ( $success )
 {
            return redirect( 'cart' );
        }

    }

}

?>