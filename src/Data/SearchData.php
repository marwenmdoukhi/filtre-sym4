<?php

namespace  App\Data;

 use App\Entity\Category;

 class  SearchData{

     /**
      * @var integer
      */
     public $page = 1;

     /**
      * @var string
      */
     public  $q = '';

     /**
      * @var Category[]
      */
     public $categories = [];

     /**
      * @var null|integer
      */

     public  $max;
     /**
      * @var null|integer
      */
     public $min;

     /**
      * @var boolean
      */
     public  $promo= false;

 }