
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
          
<script src="https://cdn.rawgit.com/ethereum/web3.js/develop/dist/web3.js"></script> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript"  src="script.js"> </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
</head>
<man>
    <nav style="height: 120px" >
               <div class="nav-wrapper orange accent-3">
                <img src="logo\e-voting-logo.png" alt="" height="120" width="350" style="padding-left: 250px"; >
               
                  <div class="brand-logo center"><h3 style="color: black">Election Commission Of India</h3></div>
    
               </div>
            </nav>
        </man>
<body>
    
    <div class="container">
        <div id="card-alert" class="card light-blue lighten-5">
                           <div class="card-content light-blue-text">
                             <p id="loc_info">CANDIDATE LIST</p>
                           </div>
                         </div>
       <table >
         <h1>
           
             <thead>
               <tr>
                   <th>Election Symbol</th>
                   <th>Party</th>
                   <th>Candidate Name</th>
                   <th>Vote</th>
               </tr>
             </thead>
     
             <tbody>
               <tr style="background-color: rgb(241, 152, 92); border: 1px solid black; ">
                   
                   <td><img src="logo\bjp.png" alt=" "height="42" width="72" style="padding-left:30px ;"></td>
                   <td>Bharatiya Janata Party</td>
                 <td id="cand1">Narendra Modi</td>
                 <td ><button id="vote1" onclick="incrementValue()" class="btn waves-effect waves-light" type="button" >Vote
       </button></td>
                 
               </tr>
               <tr style="background-color:  rgb(156, 240, 61); border: 1px solid black;">
                 <td><img src="logo\cong.png" alt=" "height="42"width="72" style="padding-left:30px ;"></td>
                 <td>Indian National Congress</td>
                 <td id="cand2">Rahul Gandhi</td>
                 <td><button id="vote2"onclick="incv2()"  class="btn waves-effect waves-light" type="button" >Vote
         
       </button></td>
               </tr>
               <tr style="background-color: rgb(241, 152, 92); border: 1px solid black;">
                 <td><img src="logo\rsc.png" alt=" "height="42"width="72" style="padding-left:30px ;"></td>
                 <td>Nationalist Congress Party</td>
                 <td id="cand3">Sharad Pawar</td>
                 <td><button id="vote3"  class="btn waves-effect waves-light" type="submit" onclick="incv3()">Vote
         
       </button></td>
               </tr>
               <tr style="background-color:  rgb(156, 240, 61); border: 1px solid black;">
                 <td><img src="logo\shiv.png" alt=" "height="42" width="72" style="padding-left:30px ;"></td>
                  <td>Shiv Sena</td>
                 <td id="cand4">Uddav Thakre</td>
                 <td><button id="vote4" onclick="incv4()" class="btn waves-effect waves-light" type="submit" name="action">Vote
         
       </button></td>
               </tr>
           </h1>
         </table>
       </div>
     
</body>
</html>
<script type="text/javascript"  src="script.js"> </script>