<?php


/**
 * Sprout Apps Invoice Template Functions
 *
 * @package Sprout_Invoice
 * @subpackage Utility
 * @category Template Tags
 */


if ( !function_exists('si_get_invoice_line_items') ) :
/**
 * Get the invoice line items
 * @param  integer $id 
 * @return array      
 */
function si_get_invoice_line_items( $id = 0 ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	$invoice = SI_Invoice::get_instance( $id );
	return apply_filters( 'si_get_invoice_line_items', $invoice->get_line_items(), $invoice );
}
endif;

if ( !function_exists('si_get_invoice_history') ) :
/**
 * Get the invoice history
 * @param  integer $id 
 * @return array      
 */
function si_get_invoice_history( $id = 0 ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	$invoice = SI_Invoice::get_instance( $id );
	return apply_filters( 'si_get_invoice_history', $invoice->get_history(), $invoice );
}
endif;


if ( !function_exists('si_get_invoice_status') ) :
/**
 * Get the invoice status
 * @param  integer $id 
 * @return string      
 */
function si_get_invoice_status( $id = 0 ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	$invoice = SI_Invoice::get_instance( $id );
	switch ( $invoice->get_status() ) {
		case 'draft' :
			$status = SI_Invoice::STATUS_TEMP;
			break;
		case SI_Invoice::STATUS_PENDING:
			$status = 'pending';
			break;
		
		default:
			$status = $invoice->get_status();
			break;
	}
	return apply_filters( 'si_get_invoice_status', $status, $invoice );
}
endif;

if ( !function_exists('si_invoice_status') ) :
/**
 * Echo the invoice status
 * @param  integer $id 
 * @return string      
 */
function si_invoice_status( $id = 0 ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	echo apply_filters( 'si_invoice_status', si_get_invoice_status($id), $id );
}
endif;


if ( !function_exists('si_get_invoicestatus_label') ) :
/**
 * Get the invoice status_label
 * @param  integer $id 
 * @return string      
 */
function si_get_invoice_status_label( $id = 0 ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	$invoice = SI_Invoice::get_instance( $id );
	return apply_filters( 'si_get_invoice_status_label', $invoice->get_status_label(), $invoice );
}
endif;

if ( !function_exists('si_invoice_status_label') ) :
/**
 * Echo the invoice status_label
 * @param  integer $id 
 * @return string      
 */
function si_invoice_status_label( $id = 0 ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	echo apply_filters( 'si_invoice_status_label', si_get_invoice_status_label($id), $id );
}
endif;


if ( !function_exists('si_get_invoicesubmission_fields') ) :
/**
 * Get the invoice submission_fields
 * @param  integer $id 
 * @return array      
 */
function si_get_invoice_submission_fields( $id = 0 ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	$invoice = SI_Invoice::get_instance( $id );
	return apply_filters( 'si_get_invoice_submission_fields', $invoice->get_submission_fields(), $invoice );
}
endif;



if ( !function_exists('si_get_invoiceissue_date') ) :
/**
 * Get the invoice issue_date
 * @param  integer $id 
 * @return string      
 */
function si_get_invoice_issue_date( $id = 0 ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	$invoice = SI_Invoice::get_instance( $id );
	return apply_filters( 'si_get_invoice_issue_date', $invoice->get_issue_date(), $invoice );
}
endif;

if ( !function_exists('si_invoice_issue_date') ) :
/**
 * Echo the invoice issue_date
 * @param  integer $id 
 * @return string      
 */
function si_invoice_issue_date( $id = 0 ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	echo apply_filters( 'si_invoice_issue_date', date( get_option('date_format'), si_get_invoice_issue_date($id) ), $id );
}
endif;

if ( !function_exists('si_get_invoice_due_date') ) :
/**
 * Get the invoice due_date
 * @param  integer $id 
 * @return string      
 */
function si_get_invoice_due_date( $id = 0 ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	$invoice = SI_Invoice::get_instance( $id );
	return apply_filters( 'si_get_invoice_due_date', $invoice->get_due_date(), $invoice );
}
endif;

if ( !function_exists('si_invoice_due_date') ) :
/**
 * Echo the invoice due_date
 * @param  integer $id 
 * @return string      
 */
function si_invoice_due_date( $id = 0 ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	echo apply_filters( 'si_invoice_due_date', date( get_option('date_format'), si_get_invoice_due_date($id) ), $id );
}
endif;

if ( !function_exists('si_get_invoice_expiration_date') ) :
/**
 * Get the invoice expiration_date
 * @param  integer $id 
 * @return string      
 */
function si_get_invoice_expiration_date( $id = 0 ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	$invoice = SI_Invoice::get_instance( $id );
	return apply_filters( 'si_get_invoice_expiration_date', $invoice->get_expiration_date(), $invoice );
}
endif;

if ( !function_exists('si_invoice_expiration_date') ) :
/**
 * Echo the invoice expiration_date
 * @param  integer $id 
 * @return string      
 */
function si_invoice_expiration_date( $id = 0 ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	echo apply_filters( 'si_invoice_expiration_date', date( get_option('date_format'), si_get_invoice_expiration_date($id) ), $id );
}
endif;


if ( !function_exists('si_get_invoice_id') ) :
/**
 * Get the invoice id
 * @param  integer $id 
 * @return string      
 */
function si_get_invoice_id( $id = 0 ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	$invoice = SI_Invoice::get_instance( $id );
	if ( $invoice->get_invoice_id() ) {
		$id = $invoice->get_invoice_id();
	}
	return apply_filters( 'si_get_invoice_id', $id, $invoice );
}
endif;

if ( !function_exists('si_invoice_id') ) :
/**
 * Echo the invoice id
 * @param  integer $id 
 * @return string      
 */
function si_invoice_id( $id = 0 ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	echo apply_filters( 'si_invoice_id', si_get_invoice_id($id), $id );
}
endif;


if ( !function_exists('si_get_invoice_po_number') ) :
/**
 * Get the invoice po_number
 * @param  integer $id 
 * @return string      
 */
function si_get_invoice_po_number( $id = 0 ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	$invoice = SI_Invoice::get_instance( $id );
	return apply_filters( 'si_get_invoice_po_number', $invoice->get_po_number(), $invoice );
}
endif;

if ( !function_exists('si_invoice_po_number') ) :
/**
 * Echo the invoice po_number
 * @param  integer $id 
 * @return string      
 */
function si_invoice_po_number( $id = 0 ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	echo apply_filters( 'si_invoice_po_number', si_get_invoice_po_number($id), $id );
}
endif;


if ( !function_exists('si_get_invoice_client_id') ) :
/**
 * Get the invoice client_id
 * @param  integer $id 
 * @return string      
 */
function si_get_invoice_client_id( $id = 0 ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	$invoice = SI_Invoice::get_instance( $id );
	return apply_filters( 'si_get_invoice_client_id', $invoice->get_client_id(), $invoice );
}
endif;

if ( !function_exists('si_invoice_client_id') ) :
/**
 * Echo the invoice client_id
 * @param  integer $id 
 * @return string      
 */
function si_invoice_client_id( $id = 0 ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	echo apply_filters( 'si_invoice_client_id', si_get_invoice_client_id($id), $id );
}
endif;


if ( !function_exists('si_get_invoice_client') ) :
/**
 * Get the invoice client
 * @param  integer $id 
 * @return string      
 */
function si_get_invoice_client( $id = 0 ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	$invoice = SI_Invoice::get_instance( $id );
	return $invoice->get_client();
}
endif;


if ( !function_exists('si_get_invoice_discount') ) :
/**
 * Get the invoice discount
 * @param  integer $id 
 * @return string      
 */
function si_get_invoice_discount( $id = 0 ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	$invoice = SI_Invoice::get_instance( $id );
	return apply_filters( 'si_get_invoice_discount', $invoice->get_discount(), $invoice );
}
endif;

if ( !function_exists('si_invoice_discount') ) :
/**
 * Echo the invoice discount
 * @param  integer $id 
 * @return string      
 */
function si_invoice_discount( $id = 0 ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	echo apply_filters( 'si_invoice_discount', si_get_invoice_discount($id), $id );
}
endif;


if ( !function_exists('si_get_invoice_tax') ) :
/**
 * Get the invoice tax
 * @param  integer $id 
 * @return string      
 */
function si_get_invoice_tax( $id = 0 ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	$invoice = SI_Invoice::get_instance( $id );
	return apply_filters( 'si_get_invoice_tax', $invoice->get_tax(), $invoice );
}
endif;

if ( !function_exists('si_invoice_tax') ) :
/**
 * Echo the invoice tax
 * @param  integer $id 
 * @return string      
 */
function si_invoice_tax( $id = 0 ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	echo apply_filters( 'si_invoice_tax', si_get_invoice_tax($id), $id );
}
endif;


if ( !function_exists('si_get_invoice_payments_total') ) :
/**
 * Get the invoice total
 * @param  integer $id 
 * @return string      
 */
function si_get_invoice_payments_total( $id = 0 ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	$invoice = SI_Invoice::get_instance( $id );
	return apply_filters( 'si_get_invoice_payments_total', $invoice->get_payments_total(), $invoice );
}
endif;

if ( !function_exists('si_invoice_payments_total') ) :
/**
 * Echo the invoice total
 * @param  integer $id 
 * @return string      
 */
function si_invoice_payments_total( $id = 0 ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	echo apply_filters( 'si_invoice_payments_total', sa_get_formatted_money( si_get_invoice_payments_total($id) ), $id );
}
endif;

if ( !function_exists('si_get_invoice_balance') ) :
/**
 * Get the invoice balance
 * @param  integer $id 
 * @return string      
 */
function si_get_invoice_balance( $id = 0 ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	$invoice = SI_Invoice::get_instance( $id );
	return apply_filters( 'si_get_invoice_balance', $invoice->get_balance(), $invoice );
}
endif;

if ( !function_exists('si_invoice_balance') ) :
/**
 * Echo the invoice remaining balance
 * @param  integer $id 
 * @return string      
 */
function si_invoice_balance( $id = 0 ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	echo apply_filters( 'si_invoice_balance', sa_get_formatted_money( si_get_invoice_balance($id) ), $id );
}
endif;

if ( !function_exists('si_get_invoice_calculated_total') ) :
/**
 * Get the invoice total
 * @param  integer $id 
 * @return string      
 */
function si_get_invoice_calculated_total( $id = 0 ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	$invoice = SI_Invoice::get_instance( $id );
	return apply_filters( 'si_get_invoice_calculated_total', $invoice->get_calculated_total(), $invoice );
}
endif;

if ( !function_exists('si_invoice_calculated_total') ) :
/**
 * Echo the invoice total
 * @param  integer $id 
 * @return string      
 */
function si_invoice_calculated_total( $id = 0 ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	echo apply_filters( 'si_invoice_calculated_total', sa_get_formatted_money( si_get_invoice_calculated_total($id) ), $id );
}
endif;

if ( !function_exists('si_get_invoice_deposit') ) :
/**
 * Get the invoice deposit
 * @param  integer $id 
 * @return string      
 */
function si_get_invoice_deposit( $id = 0 ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	$invoice = SI_Invoice::get_instance( $id );
	return apply_filters( 'si_get_invoice_deposit', $invoice->get_deposit(), $invoice );
}
endif;

if ( !function_exists('si_invoice_deposit') ) :
/**
 * Echo the invoice deposit
 * @param  integer $id 
 * @return string      
 */
function si_invoice_deposit( $id = 0 ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	echo apply_filters( 'si_invoice_deposit', si_get_invoice_deposit($id), $id );
}
endif;

if ( !function_exists('si_get_invoice_total') ) :
/**
 * Get the invoice total
 * @param  integer $id 
 * @return string      
 */
function si_get_invoice_total( $id = 0 ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	$invoice = SI_Invoice::get_instance( $id );
	return apply_filters( 'si_get_invoice_total', $invoice->get_total(), $invoice );
}
endif;

if ( !function_exists('si_invoice_total') ) :
/**
 * Echo the invoice total
 * @param  integer $id 
 * @return string      
 */
function si_invoice_total( $id = 0 ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	echo apply_filters( 'si_invoice_total', si_get_invoice_total($id), $id );
}
endif;


if ( !function_exists('si_get_invoice_subtotal') ) :
/**
 * Get the invoice subtotal
 * @param  integer $id 
 * @return string      
 */
function si_get_invoice_subtotal( $id = 0 ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	$invoice = SI_Invoice::get_instance( $id );
	return apply_filters( 'si_get_invoice_subtotal', $invoice->get_subtotal(), $invoice );
}
endif;

if ( !function_exists('si_invoice_subtotal') ) :
/**
 * Echo the invoice subtotal
 * @param  integer $id 
 * @return string      
 */
function si_invoice_subtotal( $id = 0 ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	echo apply_filters( 'si_invoice_subtotal', si_get_invoice_subtotal($id), $id );
}
endif;


if ( !function_exists('si_get_invoice_terms') ) :
/**
 * Get the invoice terms
 * @param  integer $id 
 * @return string      
 */
function si_get_invoice_terms( $id = 0 ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	$invoice = SI_Invoice::get_instance( $id );
	return apply_filters( 'si_get_invoice_terms', $invoice->get_terms(), $invoice );
}
endif;

if ( !function_exists('si_invoice_terms') ) :
/**
 * Echo the invoice terms
 * @param  integer $id 
 * @return string      
 */
function si_invoice_terms( $id = 0 ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	echo apply_filters( 'si_invoice_terms', si_get_invoice_terms($id), $id );
}
endif;


if ( !function_exists('si_get_invoice_sender_note') ) :
/**
 * Get the invoice sender_note
 * @param  integer $id 
 * @return string      
 */
function si_get_invoice_sender_note( $id = 0 ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	$invoice = SI_Invoice::get_instance( $id );
	return apply_filters( 'si_get_invoice_sender_note', $invoice->get_sender_note(), $invoice );
}
endif;

if ( !function_exists('si_invoice_sender_note') ) :
/**
 * Echo the invoice sender_note
 * @param  integer $id 
 * @return string      
 */
function si_invoice_sender_note( $id = 0 ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	echo apply_filters( 'si_invoice_sender_note', si_get_invoice_sender_note($id), $id );
}
endif;


if ( !function_exists('si_get_invoice_notes') ) :
/**
 * Get the invoice notes
 * @param  integer $id 
 * @return string      
 */
function si_get_invoice_notes( $id = 0 ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	$invoice = SI_Invoice::get_instance( $id );
	return apply_filters( 'si_get_invoice_notes', $invoice->get_notes(), $invoice );
}
endif;

if ( !function_exists('si_invoice_notes') ) :
/**
 * Echo the invoice notes
 * @param  integer $id 
 * @return string      
 */
function si_invoice_notes( $id = 0 ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	echo apply_filters( 'si_invoice_notes', si_get_invoice_notes($id), $id );
}
endif;


if ( !function_exists('si_get_invoice_currency') ) :
/**
 * Get the invoice currency
 * @param  integer $id 
 * @return string      
 */
function si_get_invoice_currency( $id = 0 ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	$invoice = SI_Invoice::get_instance( $id );
	return apply_filters( 'si_get_invoice_currency', $invoice->get_currency(), $invoice );
}
endif;

if ( !function_exists('si_invoice_currency') ) :
/**
 * Echo the invoice currency
 * @param  integer $id 
 * @return string      
 */
function si_invoice_currency( $id = 0 ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	echo apply_filters( 'si_invoice_currency', si_get_invoice_currency($id), $id );
}
endif;


//////////////
// Payments //
//////////////

if ( !function_exists('si_payment_options') ) :
/**
 * The payment link for invoices
 * @param  integer $id  // FUTURE
 * @return string      
 */
function si_payment_options( $id = 0, $return = 'options' ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	$enabled_processors = SI_Payment_Processors::enabled_processors();
	if ( $return == 'options' ) {
		$processor_options = array();
		foreach ( $enabled_processors as $class ) {
			$payment_processor = call_user_func( array( $class, 'get_instance' ) );
			$processor_options[$payment_processor->get_slug()] = $payment_processor->checkout_options();
		}
		$enabled_processors = $processor_options; // overload with slugs
	}
	return $enabled_processors;
	
}
endif;

function si_is_cc_processor( $slug = '' ) {
	$is_cc_processor = FALSE;
	$enabled_processors = SI_Payment_Processors::enabled_processors();
	foreach ( $enabled_processors as $class ) {
		$payment_processor = call_user_func( array( $class, 'get_instance' ) );
		if ( $payment_processor->get_slug() && $slug === $payment_processor->get_slug() ) {
			$is_cc_processor = is_subclass_of( $class, 'SI_Credit_Card_Processors'); 
		}
	}
	return $is_cc_processor;
}

if ( !function_exists('si_get_credit_card_checkout_form_action') ) :
/**
 * The payment link for invoices
 * @param  integer $id  // FUTURE
 * @return string      
 */
function si_get_credit_card_checkout_form_action( $id = 0 ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	$processor = SI_Payment_Processors::get_active_credit_card_processor();
	if ( $processor ) {
		$type = $processor->get_slug();
	}
	$url = remove_query_arg( SI_Checkouts::CHECKOUT_ACTION, si_get_payment_link( 0, $type ) );
	return apply_filters( 'si_get_credit_card_checkout_form_action', $url, $processer );
}
endif;

if ( !function_exists('si_get_credit_card_checkout_form') ) :
/**
 * The payment link for invoices
 * @param  integer $id  // FUTURE
 * @return string      
 */
function si_get_credit_card_checkout_form() {
	$form = '';
	$processor = SI_Payment_Processors::get_active_credit_card_processor();
	if ( $processor ) {
		$form = $processor->credit_card_payment_form();
	}
	return apply_filters( 'si_get_credit_card_checkout_form', $form, $processer );
}
endif;

if ( !function_exists('si_credit_card_checkout_form') ) :
/**
 * The payment link for invoices
 * @param  integer $id  // FUTURE
 * @return string      
 */
function si_credit_card_checkout_form() {
	echo si_get_credit_card_checkout_form();
}
endif;

if ( !function_exists('si_get_payment_link') ) :
/**
 * The payment link for invoices
 * @param  integer $id 
 * @param  string $type
 * @return string      
 */
function si_get_payment_link( $id = 0, $type = '' ) {
	if ( !$id ) {
		global $post;
		$id = $post->ID;
	}
	if ( $type == '' ) {
		$processor = SI_Payment_Processors::get_payment_processor();
		$type = $processor->get_slug();
	}
	return add_query_arg( array( SI_Checkouts::CHECKOUT_QUERY_VAR => $type, 'nonce' => wp_create_nonce( SI_Controller::NONCE ) ), si_get_payment_url( $id ) );
}
endif;

if ( !function_exists('si_payment_link') ) :
/**
 * The payment link for invoices
 * @param  integer $id 
 * @return string      
 */
function si_payment_link( $id = 0, $type = '' ) {
	echo si_get_payment_link( $id, $type );
}
endif;

if ( !function_exists('si_get_payment_url') ) :
/**
 * Checkout payment url
 * Not sure why I created this since it shouldn't be called this way, instead use the checkout object.
 * 
 * @param  integer $invoice_id 
 * @return               
 */
function si_get_payment_url( $invoice_id = 0 ) {
	if ( !$invoice_id ) {
		global $post;
		$invoice_id = $post->ID;
	}
	if ( !$invoice_id ) {
		$invoice_id = url_to_postid( esc_url_raw( $_SERVER['REQUEST_URI'] ) );
	}
	return add_query_arg( array( SI_Checkouts::CHECKOUT_QUERY_VAR => SI_Checkouts::PAYMENT_PAGE, SI_Checkouts::CHECKOUT_ACTION => SI_Checkouts::PAYMENT_PAGE ), get_permalink( $invoice_id ) );
}
endif;

if ( !function_exists('si_get_review_url') ) :
/**
 * Checkout review url
 * Not sure why I created this since it shouldn't be called this way, instead use the checkout object.
 * 
 * @param  integer $invoice_id 
 * @return               
 */
function si_get_review_url( $invoice_id = 0 ) {
	if ( !$invoice_id ) {
		global $post;
		$invoice_id = $post->ID;
	}
	if ( !$invoice_id ) {
		$invoice_id = url_to_postid( esc_url_raw( $_SERVER['REQUEST_URI'] ) );
	}
	return add_query_arg( array( SI_Checkouts::CHECKOUT_ACTION => SI_Checkouts::REVIEW_PAGE ), get_permalink( $invoice_id ) );
}
endif;

if ( !function_exists('si_get_complete_url') ) :
/**
 * Checkout complete url
 * Not sure why I created this since it shouldn't be called this way, instead use the checkout object.
 * 
 * @param  integer $invoice_id 
 * @return               
 */
function si_get_complete_url( $invoice_id = 0 ) {
	if ( !$invoice_id ) {
		global $post;
		$invoice_id = $post->ID;
	}
	if ( !$invoice_id ) {
		$invoice_id = url_to_postid( esc_url_raw( $_SERVER['REQUEST_URI'] ) );
	}
	return add_query_arg( array( SI_Checkouts::CHECKOUT_ACTION => SI_Checkouts::CONFIRMATION_PAGE ), get_permalink( $invoice_id ) );
}
endif;


function si_doc_history_records( $doc_id = 0, $filtered = TRUE ) {
	if ( !$doc_id ) {
		global $post;
		$doc_id = $post->ID;
	}

	$returned_history = array();

	switch ( get_post_type( $doc_id ) ) {
		case SI_Estimate::POST_TYPE:
			$estimate = SI_Estimate::get_instance( $doc_id );
			$history = $estimate->get_history();
			break;
		case SI_Invoice::POST_TYPE:
			$invoice = SI_Invoice::get_instance( $doc_id );
			$history = array_merge( $invoice->get_history(), $invoice->get_payments() );
			break;
		
		default:
			# code...
			break;
	}
	// Sort in ascending order
	asort( $history, SORT_NUMERIC );
	
	foreach ( $history as $item_id ) {

		if ( get_post_type( $item_id ) == SI_Record::POST_TYPE ) {
			$record = SI_Record::get_instance( $item_id );
			// If no type is set than just keep on moving.
			if ( $record->get_type() == SI_Record::DEFAULT_TYPE ) {
				continue;
			}
			// filter these types of records out.
			if ( $filtered ) {
				if ( in_array( $record->get_type(), array( SI_Controller::PRIVATE_NOTES_TYPE, SI_Estimates::VIEWED_STATUS_UPDATE, SI_Notifications::RECORD ) ) ) {
					continue;
				}
			}

			$r_post = $record->get_post();
			switch ( $record->get_type() ) {
				case SI_Controller::PRIVATE_NOTES_TYPE:
					$returned_history[ $item_id ]['type'] = si__('Private Note');
					break;

				case SI_Estimates::HISTORY_UPDATE:
					$returned_history[ $item_id ]['type'] = si__('Updated');
					break;

				case SI_Estimates::VIEWED_STATUS_UPDATE:
					$returned_history[ $item_id ]['type'] = si__('Viewed');
					break;

				case SI_Notifications::RECORD:
					$returned_history[ $item_id ]['type'] = si__('Notification');
					break;

				case SI_Estimates::HISTORY_INVOICE_CREATED:
					$returned_history[ $item_id ]['type'] = si__('Invoice Created');
					break;

				case SI_Estimate_Submissions::SUBMISSION_UPDATE:
					$returned_history[ $item_id ]['type'] = si__('Submitted');
					break;

				case SI_Importer::RECORD:
					$returned_history[ $item_id ]['type'] = si__('Imported');
					break;

				case SI_Estimates::HISTORY_STATUS_UPDATE:
				default:
					$returned_history[ $item_id ]['type'] = si__('Status Update');
					break;
			}
			$returned_history[ $item_id ]['status_type'] = $record->get_type();
			$returned_history[ $item_id ]['post_date'] = $r_post->post_date;
			$returned_history[ $item_id ]['update_title'] = $r_post->post_title;
			$returned_history[ $item_id ]['content'] = $r_post->post_content;
		}
		elseif( get_post_type( $item_id ) == SI_Payment::POST_TYPE ) {
			$type = si__('Payment');
			$status_type = 'payment';
			$payment = SI_Payment::get_instance( $item_id );
			$p_post = $payment->get_post();

			$returned_history[ $item_id ]['type'] = si__( 'Payment');
			$returned_history[ $item_id ]['status_type'] = si__('payment');
			$returned_history[ $item_id ]['post_date'] = $p_post->post_date;
			$returned_history[ $item_id ]['update_title'] = $p_post->post_title;

			$returned_history[ $item_id ]['content'] = '';
			$returned_history[ $item_id ]['content'] .= '<span>'.$payment->get_payment_method().'</span><br/>';
			$returned_history[ $item_id ]['content'] .= '<b>'.si__( 'Payment Total' ).':</b> '.sa_get_formatted_money( $payment->get_amount() );
		}
	}

	return $returned_history;
}





