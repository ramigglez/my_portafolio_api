<?php

class TodoList {

   public static function run ($titleText = 'Document', $headTags = [], $bodyTags = []) {
       return BaseHtml::genesis($titleText,$headTags,$bodyTags);
   }

}