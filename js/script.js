  // $('#btInformar').click(function(){
  //   $('#btInformar').hide();
  //   $('#informar').show('slow');
  //});  

  // $('#enviaseta').click(function(){
  //     errors = 0;
  //     //validacao nome
  //     if($('#nome').val() == '') {
  //       $('#nome').css('border','solid red 2px');
  //       errors++;
  //     } else {
  //       $('#nome').css('border','solid green 1px');
  //     }
  //     //validacao endereco
  //     if($('#endereco').val() == '') {
  //       $('#endereco').css('border','solid red 2px');
  //       errors++;
  //     } else {
  //       $('#endereco').css('border','solid green 1px');
  //     }    
  //     //validacao homem seta nome
  //     if($('#homemseta').val() == '') {
  //       $('#homemseta').css('border','solid red 2px');
  //       errors++;
  //     } else {
  //       $('#homemseta').css('border','solid green 1px');
  //     }
  //     //validacao homem seta tel
  //     if($('#telefone_homemseta').val() == '') {
  //       $('#telefone_homemseta').css('border','solid red 2px');
  //       errors++;
  //     } else {
  //       $('#telefone_homemseta').css('border','solid green 1px');
  //     }
      

        

  //       $.ajax({
  //         url: 'gravamapa.php',
  //         type: 'POST',
  //         data: { 
  //             nome: $('#nome').val(),
  //             endereco: $('#endereco').val(),
  //             homemseta: $('#homemseta').val(),
  //             telefone_homemseta: $('#telefone_homemseta').val()

  //             },
  //               success: function(json) {
  //                 $('#boxflutuante').css('padding-top','40px');
  //                 $('#boxflutuante').css('text-align','center');
  //                 $('#boxflutuante').html('Obrigado pela sua colaboração!');
  //             }
  //       });
  // });    




// function valida_cpf(cpf){

// 	  cpf = cpf.replace('.','');
// 	  cpf = cpf.replace('-','');
// 	  cpf = cpf.replace('.','');
	  
//       var numeros, digitos, soma, i, resultado, digitos_iguais;
//       digitos_iguais = 1;
//       if (cpf.length < 11){
      		
//             return 0;
//       }
            
//       for (i = 0; i < cpf.length - 1; i++) {
//       	if (cpf.charAt(i) != cpf.charAt(i + 1))
//                   {
//                   digitos_iguais = 0;
//                   break;
//                   }
//       }
            
//       if (!digitos_iguais)  {
//             numeros = cpf.substring(0,9);
//             digitos = cpf.substring(9);
//             soma = 0;
//             for (i = 10; i > 1; i--) {
//             	soma += numeros.charAt(10 - i) * i;
//             }
//             resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
//             if (resultado != digitos.charAt(0)){
            	
//             	return 0;
//             }
//             numeros = cpf.substring(0,10);
//             soma = 0;
//             for (i = 11; i > 1; i--)
//                   soma += numeros.charAt(11 - i) * i;
//             resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
//             if (resultado != digitos.charAt(1)) {
            	
//             	return 0;	
//             }
 			
//             }
//       else {
            
//         	return 0;
// 	}
// }


// function formatar_mascara(src, mascara) {
// 	var campo = src.value.length;
// 	var saida = mascara.substring(0,1);
// 	var texto = mascara.substring(campo);
// 	if(texto.substring(0,1) != saida) {
// 		src.value += texto.substring(0,1);
// 	}
// }

// function autotab(elemento)
// {
//  if (elemento.value.length < elemento.getAttribute("maxlength")) return;
//  var formulario = elemento.form;
//  var els = formulario.elements;
//  var x, autotab;
//  for (var i = 0, len = els.length; i < len; i++)
//  {
//   x = els[i];
//   if (elemento == x && (autotab = els[i+1]))
//   {
//    if (autotab.focus) autotab.focus();
//   }
//  }
// }

// function validateEmail(element) {
//   var emailRegEx = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
//      if ($('#'+element).val().search(emailRegEx) == -1) {
//          return 1
//      }
//      return 0;
// }






// FACEBOOK
// window.fbAsyncInit = function() {
//   FB.init({
//     appId      : '334306150033832', // App ID
//     channelUrl : '//www..pelobemdohomemseta.com.br/channel.html', // Channel File
//     status     : true, // check login status
//     cookie     : true, // enable cookies to allow the server to access the session
//     xfbml      : true  // parse XFBML
//   });

  // Additional init code here
//   FB.getLoginStatus(function(response) {
//     console.log(window.location.href);
//     if (response.status === 'connected') {
//       $('#AccessToken').val(response.authResponse.accessToken);
//       buscaDadosFb();
//       // connected
//     } else if (response.status === 'not_authorized') {
//       // not_authorized
//         if(window.location.href == 'http://www.pelobemdohomemseta.com.br/apoie.php?fb=1') {
//           login();  
//         }
//     } else {
//       // not_logged_in
//       if(window.location.href == 'http://www.pelobemdohomemseta.com.br/apoie.php?fb=1') {
//         login();  
//       }
//     }
// });

// };

// Load the SDK Asynchronously
// (function(d){
//    var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
//    if (d.getElementById(id)) {return;}
//    js = d.createElement('script'); js.id = id; js.async = true;
//    js.src = "//connect.facebook.net/en_US/all.js";
//    ref.parentNode.insertBefore(js, ref);
//  }(document));


// function buscaDadosFb() {
//     FB.api('/me?fields=picture.height(200).width(200),name,email,id,birthday,gender', function(response) {
//       $('#nome').attr('value',response.name);
//       $('#email').attr('value',response.email);
//       $('#facebook_id').attr('value',response.id);
//       $('#sexo').attr('value',response.gender);
//       $('#nascimento').attr('value',response.birthday);
//       $('#avatar').attr('value',response.picture.data.url);
//       $('#cpf').css('border','solid red 2px');
//     });
// }

// function login() {
//     FB.login(function(response) {
//         if (response.authResponse) {
//             // connected
//             buscaDadosFb();
//           } else {
//             // cancelled
//           }
//     }, {scope: 'email,user_birthday,user_photos,publish_actions,publish_stream,publish_checkins'});
// }



