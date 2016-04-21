function printData(sourceId){
    var prtHead = '<html>\n\
                    <head><style>@page{size:auto;margin:0mm;}\n\
                    html{margin:20px;padding:0px;}body{margin:20px;padding:0px;}\n\
                    input{border: 0px solid silver;}\n\
                    textarea{border: 0px solid silver;}\n\
                    fieldset{border:0px dotted silver;}\n\
                    table{width:100%;font-family:Segoe UI;}td{font-size:12px;}\n\
                    table.list{border-left:1px dotted black;border-top:1px dotted black;}\n\
                    table.list th{font-size:13px;font-weight:bold;}\n\
                    table.list td,table.list th{border-right:1px dotted black;border-bottom:1px dotted black;}\n\
                    table.tabprint{border-left:1px solid silver;border-top:1px solid silver;}\n\
                    table.tabprint th{font-size:11px;font-weight:bold;}\n\
                    table.tabprint td{font-size:9px;font-weight:normal;}\n\
                    table.tabprint td,table.tabprint th{border-right:1px solid silver;border-bottom:1px solid silver; padding: 1px; vertical-align: top;}\n\
                    td.value{border-bottom:1px dotted silver;font-weight:bold;}\n\
                    table.prtlist{border-top:1px dotted silver;border-left:1px dotted silver;} \n\
                    table.prtlist td{border-bottom:1px dotted silver;border-right:1px dotted silver;} .noprint{display:none;}</style>\n\
                    </head>\n\
                    <body style="font:11px Segoe UI">';
    var con = document.getElementById(sourceId).innerHTML;
    var prtFoot = '</body></html>';
    var w = window.open("", "Print");
    
    w.document.open();
    w.document.write(prtHead+con+prtFoot);
    w.document.close();
    
    w.print();
    w.close();
}

//function printStyled(sourceId){
//    var prtHead = '<html>\n\
//                    <head><link href="' + SITE_URL + '/css/bootstrap.min.css" rel="stylesheet" type="text/css"/><link href="' + SITE_URL + '/css/custom-table.css" rel="stylesheet" type="text/css"/><link href="' + SITE_URL + '/css/style.css" rel="stylesheet" type="text/css"/><link href="' + SITE_URL + '/css/custom.css" rel="stylesheet" type="text/css"/>\n\
//                    <style>.noprint{display:none;}</style>\n\
//                    <!--<style>@page{size:auto;margin:0mm;}\n\
//                    html{margin:20px;padding:0px;}body{margin:20px;padding:0px;}\n\
//                    fieldset{border:0px dotted silver;}\n\
//                    table{width:100%;font-family:Segoe UI;}td{font-size:12px;}\n\
//                    table.list{border-left:1px dotted black;border-top:1px dotted black;}\n\
//                    table.list th{font-size:13px;font-weight:bold;}\n\
//                    table.list td,table.list th{border-right:1px dotted black;border-bottom:1px dotted black;}\n\
//                    td.value{border-bottom:1px dotted black;font-weight:bold;}\n\
//                    table.prtlist{border-top:1px dotted silver;border-left:1px dotted silver;} \n\
//                    table.prtlist td{border-bottom:1px dotted silver;border-right:1px dotted silver;} .noprint{display:none;}</style>-->\n\
//                    </head>\n\
//                    <body style="font:11px Segoe UI">';
//    var con = document.getElementById(sourceId).innerHTML;
//    var prtFoot = '</body></html>';
//    var w = window.open("", "Print");
//    
//    w.document.open();
//    w.document.write(prtHead+con+prtFoot);
//    w.document.close();
//    
//    //w.print();
//    //w.close();
//}