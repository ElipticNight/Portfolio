<template>
    <div class="project">
        <div class="title">
            <h2>Project One</h2>
        </div>
        <div class="content">
            <div class="image">
                <img src="https://blog.depositphotos.com/wp-content/uploads/2017/07/Soothing-nature-backgrounds-2-1024x684.jpg" alt="">
            </div>
            <div class="description">
                <p>Fusce elementum lectus tortor, a iaculis lectus tincidunt at. Nullam ultricies ac ante ac sagittis. Mauris rhoncus in purus et scelerisque. Ut sodales, erat eget.</p>
            </div>
        </div>
        <div class="buttons">
            <input type="button" value="one">
            <input type="button" value="two">
        </div>
    </div>
</template>
<script>
export default {
    
}
</script>
<style lang="scss">
    .project{
        display: grid;
        grid-template-rows: 25% 50% 25%;
        width: 35vw;
        height: 35vh;
        background-color: darkblue;
        border: 5px solid green;
        .title{
            display: grid;
            justify-content: center;
            background-color: red;
        }
        .content{
            display: grid;
            grid-template-columns: 50% 50%;
            .image{
                background-color: yellow;
                img{
                    max-width:100%;
                    max-height:100%;
                }
            }
            .description{
                display: grid;
                justify-content: center;
                background-color: green;
            }
        }
        .buttons{
            display: grid;
            grid-template-columns: 50% 50%;
            background-color: gray;
        }
        &:hover{
            cursor:pointer;
        }
    }
</style>