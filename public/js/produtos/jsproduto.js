$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': "{{CSRF_TOKEN()}}"
    }
});

$('#formcadastroprodutos').submit( function(event) {
    event.preventDefault();
    setCadastro();
});

function novoProduto() {
    $('#id').val('')
    $('#nomeProduto').val('')
    $('#quantidadeProduto').val('')
    $('#precoProduto').val('')
    $('#departamentoProduto').val(1)
    $('#FrmProdutos').modal('show');
}

function carregarCategorias() {
    $.getJSON('/api/categorias', function(data) {
       
        $.each(data, function(index, cat) {
            opcao = '<option value =  "' + cat.id +'">' + cat.cat_nome + '</option>';
            $('#departamentoProduto').append(opcao);
        });

    });
}

function montarLinha(produtos) {
    
    var linha = "<tr>" + 
        "<td>" + produtos.id + "</td>" + 
        "<td>" + produtos.prd_nome + "</td>" +
        "<td>" + produtos.prd_estoque + "</td>" +
        "<td>" + produtos.prd_preco + "</td>" + 
        "<td>" + produtos.cat_id + "</td>" + 
        "<td>" + 
        '<button type="submit" class="btn btn-primary" onClick = "editar(' + produtos.id + ')">Editar</button>' +
        '<button type="submit" class="btn btn-danger" onClick = "apagar(' + produtos.id + ')">Apagar</button>' +
        "</td>" + 
        "<tr>";
    return linha;
}

function carregarProdutos() {
    $.getJSON('/api/produtos', function(data) {
        $.each(data, function(index, prod) {
            row = montarLinha(prod);
            $('#tabelaProdutos>tbody').append(row);
        });

    });
}

function apagar(id) {
    $.ajax({
        type: "DELETE",
        url:"/api/deleteprodutos/" + id,
        context: this,
        success: function () {
            $('#tabelaProdutos tr').remove();
            carregarProdutos();
           
        },
        error: function(error) {
            console.log(error);
        }
    });
}
function setCadastro() {
    
    produto = {
        id: $('#id').val(),
        nome: $('#nomeProduto').val(),
        quantidade: $('#quantidadeProduto').val(),
        preco: $('#precoProduto').val(),
        categoriaproduto: $('#departamentoProduto').val()
    }
    
    $.post("/api/setcadastro", produto, function(data) {
        $('#tabelaProdutos tr').remove();
       $('#FrmProdutos').modal('hide');
       carregarProdutos();
    });
}
function editar(id) {
    $.getJSON('/api/getproduto/' + id, function(data) {
        $('#id').val(data.id)
        $('#nomeProduto').val(data.prd_nome)
        $('#quantidadeProduto').val(data.prd_estoque)
        $('#precoProduto').val(data.prd_preco)
        $('#departamentoProduto').val(data.cat_id)
        $('#FrmProdutos').modal('show');
    });
}

$(function() {
    carregarCategorias();
    carregarProdutos();
});
