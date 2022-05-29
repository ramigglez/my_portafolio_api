<?php

class BaseHtml {
/*
    <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            
        </body>
        </html>
*/
    public static function genesis ( $titleText = 'Document', $headTags = [], $bodyTags = []   ) {

        $html = new Bp;
        $head = new Bp;
        $body = new Bp;
        $charset = new Bp;
        $hqc = new Bp;
        $viewport = new Bp;
        $title = new Bp;

        $boilerplate = doct().$html->tg('html',[
            $head->tg('head',[
                $charset->tg('meta',[],[
                    'charset' => 'UTF-8'
                ],'One','@'),
                $hqc->tg('meta',[],[
                    'http-equiv' => 'X-UA-Compatible',
                    'content' => 'IE=edge'
                ],'One','@'),
                $viewport->tg('meta',[],[
                    'name' => 'viewport',
                    'content' => 'width=device-width, initial-scale=1.0'
                ],'One','@'),
                $title->tg('title',$titleText,[],'Default','/'),
                $headTags
            ],[],'Default','/'),
            $body->tg('body',[
                $bodyTags
            ],[],'Default','/')
        ],[
            'lang' => 'en'
        ],'One','/');

        return $boilerplate;
    }

}