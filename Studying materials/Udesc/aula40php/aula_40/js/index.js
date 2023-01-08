$.getJSON('listarProduto.php').done(json => {
    if(json['status'] == 'sucesso') {
        let html = '';
        json['dados'].forEach(element => {
          html += '<div class="col">\
                    <div class="card shadow-sm">\
                      <img src="upload/'+ element['imagem'] +'" class="card-img-top" width="100%">\
                      <div class="card-body">\
                        <p class="card-title">'+ element['nome'] +'</p>\
                        <p class="card-text">'+ element['descricao'] +'</p>\
                        <div class="d-flex justify-content-between align-items-center">\
                          <div class="btn-group">\
                            <button type="button" class="btn btn-sm btn-outline-secondary">R$ '+ element['preco'] +'</button>\
                          </div>\
                        </div>\
                      </div>\
                    </div>\
                  </div>';
        });
        $('#produto-lista').append(html);
    }
  }).fail(()=> {
    $('#produto-lista').append('<div class="col-12"><p class="text-danger text-center">Não foi possível carregar os produtos</p></div>');
  })