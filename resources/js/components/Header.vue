<template lang="">
  <div class="header">
    <div class="logo">
        <a href="/">Aidan Byrne</a>
    </div>
    <div class="filler"></div>
    <ul class="navbar">
      <li><a href="/projects">Projects</a></li>
      <li><a href="/about">About me</a></li>
      <li><a href="/contact">Contact</a></li>
    </ul>
    <div class="burger"></div>
  </div>
</template>
<script>
export default {
  
}
</script>
<style lang="scss">
  @import '../../sass/vars';
  .header{
    display: flex;
    height: 7vh;
    background-color: #272836;
    .logo{
        display: flex;
        flex: 1;
        align-items: center;
        justify-content: center;
        color: $colour-red-main;
        a {
            color: $colour-red-main;
            text-decoration: none;
        }
    }
    .filler{
        display: flex;
        flex: 1;
    }
    .navbar{
        display: flex;
        flex: 2;
        margin: 0;
        padding: 0;
        justify-content: space-around;
        list-style-type: none;
        li{
            a{
                display: flex;
                height: 100%;
                padding: 0px 35px 0px 35px;
                align-items: center;
                text-align: center;
                color: $colour-red-main;
                text-decoration: none;
                &:hover{
                    text-decoration: underline;
                    background-color: #343543;
                }
            }
        }
    }

    .burger {
      position: absolute;
      top: 1.5vh;
      right: 2vh;
      height: 4vh;
      width: 4vh;
      background-color: green;
      display: none;
    }
  }

  @media screen and (max-width:1350px) {
    .header .filler {
      display: none;
    }
  }

  @media screen and (max-width:700px) {
    body {
      overflow-x: hidden;
    }

    .header {
      .navbar {
        position: absolute;
        right: 0px;
        height: 93vh;
        top: 7vh;
        flex-direction: column;
        background-color: #272836;
        transform: translateX(100%);
        transition: transform 0.5s ease-in;
      }

      .burger {
        display: block;
        cursor: pointer;
      }

      .navbar-active {
        transform: translateX(0%);
      }
    }
  }
</style>