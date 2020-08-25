$(document).ready(function() {
  $("#tabela").empty(); //Limpando a tabela
  $.ajax({
    url:
      "http://venancioshopping.com.br/wp-content/themes/padrao/getDados.php", //Definindo o arquivo onde serão buscados os dados
    success: function(dados) {
      parsedData = JSON.parse(dados);
      function removerAcentos(newStringComAcento) {
        var string = newStringComAcento;
        var mapaAcentosHex = {
          a: /[\xE0-\xE6]/g,
          e: /[\xE8-\xEB]/g,
          i: /[\xEC-\xEF]/g,
          o: /[\xF2-\xF6]/g,
          u: /[\xF9-\xFC]/g,
          c: /\xE7/g,
          n: /\xF1/g
        };

        for (var letra in mapaAcentosHex) {
          var expressaoRegular = mapaAcentosHex[letra];
          string = string.replace(expressaoRegular, letra);
        }

        return string;
      }
      parsedData.forEach(function(data) {
        if (typeof data.post_title === "undefined") {
          data.post_title = data.name;
          data.guid =
            "http://venancioshopping.com.br/" +
            data.taxonomy +
            "/" +
            data.slug;
        }
      });
      function removerPela(chave, valor) {
        parsedData = parsedData.filter(function(jsonObject) {
          return jsonObject[chave] != valor;
        });
        return parsedData;
      }
      parsedData = removerPela("post_type", "acf-field");
      parsedData = removerPela("post_type", "acf-field-group");
      parsedData = removerPela("post_type", "nav_menu_item");
      parsedData = removerPela("post_title", "Rascunho automático");
      parsedData = removerPela("post_type", "revision");
      parsedData = removerPela("post_type", "attachment");
      parsedData = removerPela("post_type", "page");
      parsedData = removerPela("post_type", '"ngg_gallery"');
      parsedData = removerPela("post_type", '"bwg_gallery"');
      parsedData = removerPela("post_type", '"customize_changeset"');
      parsedData = removerPela("post_type", '"foogallery"');
      parsedData = removerPela("post_type", '"mec_calendars"');
      parsedData = removerPela("post_status", "inherit");
      parsedData = removerPela("post_status", "trash");
      parsedData = removerPela("post_status", "draft");
      parsedData.forEach(function(data) {
        data.post_title = removerAcentos(data.post_title);
      });
      var options = {
        data: parsedData,
        getValue: "post_title",
        template: {
          type: "links",
          fields: {
            link: "guid"
          }
        },
        list: {
          onChooseEvent: function() {
            let selected = $(".IDForm").getSelectedItemData();
            location.replace(selected["guid"]);
          },
          onKeyEnterEvent: function() {
            let selected = $(".IDForm").getSelectedItemData();
            location.replace(selected["guid"]);
          },
          sort: {
            enabled: true
          },
          match: {
            enabled: true
          }
        },
        highlightPhrase: false
      };
      $(".IDForm").easyAutocomplete(options);
    }
  });
});
