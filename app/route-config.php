<?php
class Route {

    private function simpleRoute($file, $route,$title){
        if(!empty($_REQUEST['uri'])){
            $route = preg_replace("/(^\/)|(\/$)/","",$route);
            $reqUri =  preg_replace("/(^\/)|(\/$)/","",$_REQUEST['uri']);
        }else{
            $reqUri = "/";
        }

        if($reqUri == $route){
            include 'app/globalconfig.php';
            $params = [];
            include($file);
            exit();

        }

    }

    private function addRoute($route,$file,$title){
        //will store all the parameters value in this array
        $params = [];

        //will store all the parameters names in this array
        $paramKey = [];

        //finding if there is any {?} parameter in $route
        preg_match_all("/(?<={).+?(?=})/", $route, $paramMatches);

        //if the route does not contain any param call simpleRoute();
        if(empty($paramMatches[0])){
            $this->simpleRoute($file,$route,$title);
            return;
        }

        //setting parameters names
        foreach($paramMatches[0] as $key){
            $paramKey[] = $key;
        }

        //replacing first and last slashes
        //$_REQUEST['uri'] will be empty if req uri is /
        if(!empty($_REQUEST['uri'])){
            $route = preg_replace("/(^\/)|(\/$)/","",$route);
            $reqUri =  preg_replace("/(^\/)|(\/$)/","",$_REQUEST['uri']);
        }else{
            $reqUri = "/";
        }

        //exploding route address
        $uri = explode("/", $route);

        //will store index number where {?} parameter is required in the $route 
        $indexNum = []; 

        //storing index number, where {?} parameter is required with the help of regex
        foreach($uri as $index => $param){
            if(preg_match("/{.*}/", $param)){
                $indexNum[] = $index;
            }
        }

        //exploding request uri string to array to get
        //the exact index number value of parameter from $_REQUEST['uri']
        $reqUri = explode("/", $reqUri);

        //running for each loop to set the exact index number with reg expression
        //this will help in matching route
        foreach($indexNum as $key => $index){
        
             //in case if req uri with param index is empty then return
            //because url is not valid for this route
            if(empty($reqUri[$index])){
                return;
            }
            
            //setting params with params names
            $params[$paramKey[$key]] = $reqUri[$index];


            //this is to create a regex for comparing route address
            $reqUri[$index] = "{.*}";
        }

        //converting array to sting
        $reqUri = implode("/",$reqUri);

        //replace all / with \/ for reg expression
        //regex to match route is ready !
        $reqUri = str_replace("/", '\\/', $reqUri);

        //now matching route with regex
        if(preg_match("/$reqUri/", $route))
        {
            include 'app/globalconfig.php';
            include($file);
            exit();

        }
    }

    function addView($route, $file, $title){
        $file = 'views/'. $file;
        $this-> addRoute($route,$file, $title);
    }
    function addProcess($route, $file, $title){
        $file = 'process/'. $file;
        $this-> addRoute($route,$file, $title);
    }
    function addApi($route, $file, $title){
        $file = 'API/'. $file;
        $this-> addRoute($route,$file, $title);
    }

    

    function notFound($file, $title){
        include('views/'.$file);
        exit();
    }
}