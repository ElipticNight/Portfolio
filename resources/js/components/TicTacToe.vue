<template>
    <div class="project">
        <div class="title">
            <h2>Example Project</h2>
        </div>
        <div class="content">
            <div class="image">
                <img src="https://content.instructables.com/ORIG/FAN/BM5E/HPBPOMS8/FANBM5EHPBPOMS8.png?frame=1" alt="">
            </div>
            <div class="description">
                <p>This Project is tic tac toe. It has an AI you can play against.</p>
            </div>
        </div>
        <div class="buttons">
            <input @click="OpenLive" type="button" value="View Live" class="button live">
            <input @click="OpenSource" type="button" value="View Source" class="button source">
        </div>
    </div>
</template>
<script>
export default {
    methods: {
        OpenLive: function() {
            window.open('https://tictactoe.aidanbyrne.tech', "_blank");
        },
        OpenSource: function() {
            window.open('https://github.com/ElipticNight/tic-tac-toe', "_blank");
        }
    }
}
</script>
<style lang="scss">
    .project{
        display: grid;
        grid-template-rows: 1fr 3fr 1fr;
        width: 35vw;
        height: 35vh;
        background-color: #272836;
        border: 5px solid #00097a;
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
                    max-width: 100%;
                    max-height: 100%;
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
        h2, p{
            color: #FC3636;
        }

        &:hover{
            cursor:pointer;
            box-shadow: 0px 0px 9px 4px #FC3636;
        }
    }
</style>