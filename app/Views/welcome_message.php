<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" href="//cdn.webix.com/edge/webix.css" type="text/css"> 
    <script src="//cdn.webix.com/edge/webix.js" type="text/javascript"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>TEST</title>
</head>
<style type="text/css">
    a:link {
        font-family: Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 15px;
        text-align: right;
        text-decoration: none;
        text-align: right;
        color: #6d6d6d;
        padding: 5px;
    }

    /* Link no visitado*/
    a:visited {
        ext-decoration: none;
        color: #6d6d6d
    }

    /*Link visitado*/
</style>
<link rel="stylesheet" type="text/css" href="css/style1.css"/>
</head>
<body>
<div class="login-page">
    <div class="form" id="cont"></div>
</div>


<footer> TEST<br/>
</footer>

<script type="text/javascript">
webix.ui({
  container:"cont",
  view:"form", elements:[
    { view:"text", label:"Name", name:"name", placeholder:"Usuario" },
    { view:"text", label:"Password", type:"password",name:"pass", placeholder:"Password" },
    { margin:20, cols:[
      { view:"button", value:"Enviar", width:200, css:"webix_primary", click:function(){
      	var values = this.getFormView().getValues();
        webix.ajax().post('/login', { datos : JSON.stringify(values) }).then(function(result){
          response = result.json()
          if(response == 1){
            webix.message('DATOS CORRECTOS');
          }else{
            webix.message('DATOS INCORRECTOS');
          }
        });
        
      }}
    ]}
  ]
});
</script>
</body>
</html>
