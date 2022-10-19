
 var i = 0;
 var j =0;
 var k =0;
 var l =0;
 function disable() {
    document.getElementById("vote1").disabled = true;
    document.getElementById("vote2").disabled = true;
    document.getElementById("vote3").disabled = true;
    document.getElementById("vote4").disabled = true;
}
function incrementValue()
{
    document.getElementById('vote1').value = ++i;
    console.log(i)
    alert('vote submited to MOdiji');
    disable()
}

function incv3(){
    document.getElementById('vote3').value = ++k;
    console.log(k)
    alert('vote submited to sarad');
    disable()
}
function incv2(){
    document.getElementById('vote2').value = ++j;
    console.log(j)
    alert('vote submited to Rahul');
    disable()
}
function incv4(){
    document.getElementById('vote4').value = ++j;
    console.log(j)
    alert('vote submited to uddav');
    disable()
}
    
// $(document).ready(function() {
//     $('.modal').modal();
   
// function disable() {
//     $('#vote1').addClass( "disabled" );
//     $('#vote2').addClass( "disabled" );
//     $('#vote3').addClass( "disabled" );
//     $('#vote4').addClass( "disabled" );
    
//     //logout
//     document.cookie = "show=John Doe; expires=Thu, 18 Dec 2013 12:00:00 UTC";
//     document.cookie = "aadhaar=John Doe; expires=Thu, 18 Dec 2013 12:00:00 UTC";
//     window.location = '/app';


// }

// $('#vote1').click(function(){
//     contractInstance.voteForCandidate('Sanat', {from: web3.eth.accounts[0]}, function() {
//         alert('vote submited to Sanat');
//         disable();
//         $('#loc_info').text('Vote submited successfully to Sanat')

//     });
// })
// $('#vote2').click(function(){
//     contractInstance.voteForCandidate('Aniket', {from: web3.eth.accounts[0]}, function() {
//         alert('vote submited to Aniket');
//          disable();
//          $('#loc_info').text('Vote submited successfully to Aniket')
//     });
// })
// $('#vote3').click(function(){
//     contractInstance.voteForCandidate('Mandar', {from: web3.eth.accounts[0]}, function() {
//         alert('vote submited to Mandar');
//          disable();
          
//           $('#loc_info').text('Vote submited successfully to Mandar')
//     });
// })
// $('#vote4').click(function(){
//     contractInstance.voteForCandidate('Akshay', {from: web3.eth.accounts[0]}, function() {
//         alert('vote submited to Akshay');
//          disable();
//          $('#loc_info').text('Vote submited successfully to Akshay')
//     });
// })
     

// })