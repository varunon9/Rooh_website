    function myFunction_qc() {
        var i,j;
        var out = "<table class=\"table\">";
        for(i=0;i< arrq.length;i++){
            out += "<tr class=\"danger\"><td>"+
              arrq[i].qid+"> "+
              arrq[i].username+" asked on "+
              arrq[i].date+
              "</td></tr>"+
              "<tr class=\"active\"><td>"+
              arrq[i].questions+
              "</td></tr>";
            for(j=0;j<arrc.length;j++){
                if(arrc[j].qid==arrq[i].qid){
                    out += "<tr class=\"info\"><td>"+"&nbsp;&nbsp;&nbsp;&nbsp;"+arrc[j].username+" "+"said -> "+arrc[j].comments+"</td></tr>";
                }
            }
        }
        out += "</table>"
        document.getElementById("id01").innerHTML = out;
    }
    
    var arrq;
    var arrc;
    //var urlq = "localhost/questions.php";
    //var urlc = "localhost/comments.php";
$(document).ready(function(){
    console.log("Starting...");
    
    $.ajax({
        type:'GET',
        url:'/questions.php',
        dataType: 'json',
        success:function(data) {
          arrq=data;
          console.log(data[0]["username"]);
          $.getJSON('http://localhost/comments.php', function(data, status){
            arrc=data;
            myFunction_qc();
          });
        }
    }); 
    
    /*
    $.getJSON('http://localhost/questions.php', function(data, status){
          console.log(data);
          //arrq = JSON.parse(data);
    
          arrq=$.parseJSON(data);
    
          $.getJSON('http://localhost/comments.php', function(data, status){
              console.log(data);
              //arrc = JSON.parse(data);

              arrc=$.parseJSON(data);
              //arrc=json_encode(data);
        
              myFunction_qc();

          });

    });
    */

});