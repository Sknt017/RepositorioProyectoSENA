function showAd() {
    console.log('click!');
    document.getElementById('log').style.display="inline";
    document.getElementById('tprod').style.display="none";
    document.getElementById('tped').style.display="none";
}
function Smodal(id){
    document.getElementById(id).style.display="block";
}
function Shide(id){
    document.getElementById(id).style.display="none";
}
function save_product(){
    // console.log("AAAAAAAAAAAAAAAAAAAAAAAA");
    let fd=new FormData();
    var FDN = document.getElementById('Name');
    var FDB = document.getElementById('Brand');
    var FDT = document.getElementById('Type');
    var FDP = document.getElementById('Price');
    var FDI = document.getElementById('Img');
    fd.append('Name', FDN.value);
    fd.append('Brand', FDB.value);
    fd.append('Type', FDT.value);
    fd.append('Price', FDP.value);
    fd.append('Img', FDI.value);
    let request=new XMLHttpRequest();
    request.open('POST','api/product_save.php',true);
    request.onload=function(){
        if(request.readyState==4 && request.status==200){
            let response=JSON.parse(request.responseText);
            if(response.state){
                alert("ok");
                console.log(response);
            }else{
                alert(response.detail);            
                console.log(response);
            }
        }
    }
    request.send(fd);
}
function editP(IdPro){
    // var w=confirm("¿editar producto?");
    let fd=new FormData;
    fd.append('IdPro',IdPro);
    // console.log(IdPro);
    let request=new XMLHttpRequest();
    request.open('POST','api/get_product.php',true);
    request.onload=function(){
        if(request.readyState==4 && request.status==200){
            console.log(request);
            let response=JSON.parse(request.responseText);
            console.log(response);
            document.getElementById('IdPro-e').value=IdPro;
            document.getElementById('Name-e').value=response.product.NomPro;
            document.getElementById('Brand-e').value=response.product.IdMar;
            document.getElementById('Type-e').value=response.product.TiPro;
            document.getElementById('Price-e').value=response.product.PriPro;
            document.getElementById('Img-e').value=response.product.Img;
            Smodal('modal-product-edit');
        }
    }
    request.send(fd);
}
function showPed(){
    document.getElementById('tped').style.display="inline";
    document.getElementById('tprod').style.display="none";
    document.getElementById('log').style.display="none";
}
function update_product(){
    // console.log("AAAAAAAAAAAAAAAAAAAAAAAA");
    let fd=new FormData();
    var FDIP = document.getElementById('IdPro-e');
    var FDN = document.getElementById('Name-e');
    var FDB = document.getElementById('Brand-e');
    var FDT = document.getElementById('Type-e');
    var FDP = document.getElementById('Price-e');
    var FDI = document.getElementById('Img-e');
    fd.append('IdPro',FDIP.value);
    fd.append('Name', FDN.value);
    fd.append('Brand', FDB.value);
    fd.append('Type', FDT.value);
    fd.append('Price', FDP.value);
    fd.append('Img', FDI.value);
    let request=new XMLHttpRequest();
    request.open('POST','api/update-product.php',true);
    request.onload=function(){
        if(request.readyState==4 && request.status==200){
            let response=JSON.parse(request.responseText);
            if(response.state){
                alert("ok");
                console.log(response);
            }else{
                alert(response.detail);            
                console.log(response);
            }
        }
    }
    request.send(fd);
}
function ChaSta(IdPro, StatusP){
    console.log("running...");
    debugger;
    let fd = new FormData;
    fd.append('IdPro', IdPro);
    fd.append('StatusP', StatusP);
    let request=new XMLHttpRequest();
    request.open('POST','api/des_product.php',true);
    request.onload=function(){
        if(request.readyState==4 && request.status==200){
            let response=JSON.parse(request.responseText);
            if(response.state){
                alert("ok");
                console.log(response);
            }else{
                alert(response.detail);            
                console.log(response);
            }
        }
    }
    request.send(fd);
}