<?php

function router()
{
    $path = request_path();
    switch ($path) {
        case 'welcome':
            $page = array(
                '#markup' => theme('welcome', array()),
            );
            break;
        case '':
            $page = array(
                '#markup' => theme('welcome', array()),
            );
            break;
        case 'listing-list':
            $page = array(
                '#markup' => theme('listing-list', array()),
            );
            break;
        case 'listing-view':
            $page = array(
                '#markup' => theme('listing-view', array()),
            );
            break;
        case 'basic-listing-view-item':
            $page = array(
                '#markup' => theme('basic-listing-view-item', array()),
            );
            break;
        case 'contact-listing-view-item':
            $page = array(
                '#markup' => theme('contact-listing-view-item', array()),
            );
            break;
        case 'location-listing-view-item':
            $page = array(
                '#markup' => theme('location-listing-view-item', array()),
            );
            break;
        case 'description-listing-view-item':
            $page = array(
                '#markup' => theme('description-listing-view-item', array()),
            );
            break;
        case 'productsandservices-listing-view-item':
            $page = array(
                '#markup' => theme('productsandservices-listing-view-item', array()),
            );
            break;
        case 'basic-listing-node-form':
            $page = array(
                '#markup' => theme('basic-listing-node-form', array()),
            );
            break;
        case 'contact-listing-node-form':
            $page = array(
                '#markup' => theme('contact-listing-node-form', array()),
            );
            break;
        case 'description-listing-node-form':
            $page = array(
                '#markup' => theme('description-listing-node-form', array()),
            );
            break;
        case 'location-listing-node-form':
            $page = array(
                '#markup' => theme('location-listing-node-form', array()),
            );
            break;
	  case 'owner-listing-list':
		$page = array(
		  '#markup' => theme('owner-listing-list', array()),
		);
		break;
	  case 'search-listing-list':
		$page = array(
		  '#markup' => theme('search-listing-list', array()),
		);
		break;
	  case 'register':
		$page = array(
		  '#markup' => theme('register', array()),
		);
		break;
        default:
            $page = array(
                '#markup' => "<div>Hello, world</div>",
            );
            break;
    }

    return $page;
}
