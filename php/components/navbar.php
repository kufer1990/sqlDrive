
<style>
  /* .nav-link:hover{
    
color:rgb(152, 136, 237)!important;
transition: .5s;
  } */
</style>
<!-- 248,249,250 -->
<nav class="navbar navbar-expand-lg navbar-light p-3 ">
  <!-- <a class="navbar-brand m-3" href="#">Navbar</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="mainPage.php">Strona Główna <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="choiceInstitution.php">Szkoła</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="php/maingape.php">Strona Główna</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
    </ul>
  </div>
</nav>

<script>
  document.querySelectorAll('.nav-link').forEach((element)=>{
    element.addEventListener('mouseover',()=>{
document.querySelector('.navbar').style.background ="#ece8f8";
document.querySelector('.navbar').style.transition =".5s";
  })
  element.addEventListener('mouseout',()=>{ 
    document.querySelector('.navbar').style.background ="#d4c8f500";})
 })
</script>