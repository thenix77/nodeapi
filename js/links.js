$(function () {
    listar()
})

const __ajax = (url, data) => {
    var ajax = $.ajax({
        'method': 'POST',
        'url': url,
        'data': data
    });

    return ajax
}

var listar = () => {

    __ajax('../../api/listar.php', '')
        .done((info) => {

            //console.log(info)

            //tranformar en objeto
            var tarjetas = JSON.parse(info)
            var html = ''
            // console.log(tarjetas)

            if (tarjetas != null)

                for (var i in tarjetas) {
                    //console.log(tarjetas[i].title);

                    html += `<div class="card border-dark shadow mb-5 rounded" style="width:30%;">
                                                <div class="card-header bg-secondary text-white text-right text-uppercase">
                                                    ${ tarjetas[i].title}
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title"><a href="${ tarjetas[i].url}" target='_black'> <i class='fas fa-link'></i> Link </a></h5>
                                                    <hr>
                                                    <span class='text-center'> 
                                                        <a onclick='editar(${ tarjetas[i].id})' class='text-warning text-right'>[ <i class="far fa-edit"></i>  editar]</a> 
                                                        <a onclick='borrar(${ tarjetas[i].id})' class='text-danger text-right'>[ <i class="far fa-trash-alt"></i>  Eliminar]</a> 
                                                    </span>
                                                    <p class="card-text">
                                                        ${ tarjetas[i].description}
                                                    </p>
                                                </div>
                                            </div>                        
                                        `


                }

            else {

                html += `<div class="card border-dark shadow mb-5 rounded" style="width:30%;">
                                                <div class="card-header bg-secondary text-white text-right text-uppercase">
                                                  Links
                                                </div>
                                                <div class="card-body">
                                                    <span class='text-center'> No hay Item Registrado 
                                                    </span>
                                                </div>
                                            </div>                        
                                        `

            }

            $('.card-deck').html(html)


        })
}

$('#nuevo').click('on', () => {
    $('#insertar').modal('show')
})

$("#form-insert").submit(function (event) {
    event.preventDefault();

    console.log($('#form-insert').serialize())

    __ajax('../../api/insertar.php', $('#form-insert').serialize())
        .done((info) => {
            //console.log(info)
            listar()
        })

    $('#insertar').modal('hide')

});

const editar = (id) => {

    __ajax('../../api/editar.php', {
        'id': id
    })
        .done((info) => {

            $('#editar').modal('show')

            var tarjeta = JSON.parse(info)
            tarjeta = tarjeta[0]

            $('#title').val(tarjeta.title)
            $('#url').val(tarjeta.url)
            $('#description').val(tarjeta.description)
            $('#id').val(tarjeta.id)

        })

}

$("#form-edit").submit(function (event) {
    event.preventDefault();

    __ajax('../../api/update.php', $('#form-edit').serialize())
        .done((info) => {
            console.log(info)
            listar()
        })

    $('#editar').modal('hide')

});

const borrar = (id) => {

    __ajax('../../api/borrar.php', {
        'id': id
    })
        .done((info) => {

            $('#delete').modal('show')
            html = ''

            var tarjeta = JSON.parse(info)
            tarjeta = tarjeta[0]

            $('#idx').val(tarjeta.id)
            html += `<p>Se desea eliminar el link <span class='text-danger'> ${tarjeta.title}</span></p>`

            $('.titulo').html(html)

        })

    $("#form-delete").submit(function (event) {
        event.preventDefault();


        __ajax('../../api/delete.php', $('#form-delete').serialize())
            .done((info) => {
                console.log(info)
                console.log('............................')
                debugger
                listar()
            })

        $('#delete').modal('hide')

    });

}