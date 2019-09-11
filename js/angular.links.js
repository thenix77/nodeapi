
//npm install angular-modal-service
var app = angular.module('MyApp', ['angularModalService'])

app.controller('Links', ['$scope', '$http', 'ModalService', (scope, http, modal)=>{

    scope.Title = " CRUD - ANGULAR"
    scope.Links = []
    const req = {
        url:'http://localhost/pdonamespace/api/listar.php',
        method:'GET'
    }

    http(req).then((data)=>{
        scope.Links = data.data
        
    })

    scope.registrar = ()=>{
         
        modal.showModal({
            templateUrl:'insert.php',
            controller:function(){
               //$('#insertar').modal('show')
            }
        })
    }
/*
    scope.editar = (id)=>{
        console.log(id)
    }
*/
}])