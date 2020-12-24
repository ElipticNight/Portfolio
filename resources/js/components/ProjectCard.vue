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
                Fusce elementum lectus tortor, a iaculis lectus tincidunt at. Nullam ultricies ac ante ac sagittis. Mauris rhoncus in purus et scelerisque. Ut sodales, erat eget. 
            </div>
        </div>
        <div class="buttons">
            <input type="button" value="one" class="button source">
            <input type="button" value="two" class="button live">
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
        grid-template-rows: 20% 60% 20%;
        width: 35vw;
        height: 35vh;
        background-color: lightblue;
        border: 5px solid green;
        .title{
            display: grid;
            justify-content: center;
            align-content: center;
        }
        .content{
            display: grid;
            grid-template-columns: 50% 50%;
            overflow: hidden;
            .image{
                img{
                    max-width:100%;
                    max-height:100%;
                }
            }
            .description{
                text-align: center;
            }
        }
        .buttons{
            display: grid;
            justify-items: center;
            align-items: center;
            grid-template-columns: 50% 50%;
            .button{
                height: 25px;
                width: 100px;
            }
        }
        &:hover{
            cursor:pointer;
            box-shadow: 0px 0px 9px 4px #747DE8;
        }
    }
</style>