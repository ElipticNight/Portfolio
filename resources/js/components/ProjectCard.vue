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
            <input type="button" value="View Live" class="button live">
            <input type="button" value="View Source" class="button source">
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
        grid-template-rows: 1fr 3fr 1fr;
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
            grid-template-columns: 1fr 1fr;
            padding-left: 10px;
            padding-right: 10px;
            column-gap: 10px;
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
            grid-template-columns: 1fr 2fr 2fr 1fr;
            .button{
                height: 25px;
                width: 100px;
            }
            .source{
                grid-column-start: 3;
            }
            .live{
                grid-column-start: 2;
            }
        }
        &:hover{
            cursor:pointer;
            box-shadow: 0px 0px 9px 4px #747DE8;
        }
    }
</style>