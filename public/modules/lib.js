export class CRUD{

   constructor(){

   } 

    add(){
     alert("Add Clicked")
   }

   showForm(){
    $('.modal').show();
   }

   onLoad(){
   
        $('#product-table').DataTable({
            processing: true,
            serverSide: false
        });
       
    };   

}