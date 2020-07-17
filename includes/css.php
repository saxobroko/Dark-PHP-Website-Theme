<style>
html{
    background-color:#737373;
}
.br{
    position:absolute;
    bottom:2%;
    right:2%;
}
.sec1,.sec2,.sec3,.sec4{
    margin-left:120px
}
.nobar{
    overflow:hidden
}
.html {font: Lucida Sans Unicode, Lucida Grande, sans-serif, Comic Sans MS, Helvetica, Arial, sans-serif ;}
.w3-sidebar{
    width:120px;
    background:#222
}
::-webkit-scrollbar{
    width:27px
}
::-webkit-scrollbar-track{
    background-color:#595959
}
::-webkit-scrollbar-thumb{
    background-color:#2b2b2b
}
::-webkit-scrollbar-corner{
    background-color:#000
}
.avatar{
    z-index:0;
    position:relative
}
.topMenu{
    z-index:20
}
.sbx-google{
    display:inline-block;
    width:35%;
    height:41px;
    white-space:nowrap;
    box-sizing:border-box;
    font-size:14px
}
.sbx-google__wrapper{
    width:100%;
    height:100%
}
.sbx-google__input{
    display:inline-block;
    -webkit-transition:box-shadow .4s ease,background .4s ease;
    transition:box-shadow .4s ease,background .4s ease;
    border:0;
    border-radius:4px;
    box-shadow:inset 0 0 0 1px #ccc;
    background:#fff;
    padding:0;
    padding-right:77px;
    padding-left:11px;
    width:100%;
    height:100%;
    vertical-align:middle;
    white-space:normal;
    font-size:inherit;
    -webkit-appearance:none;
    -moz-appearance:none;
    appearance:none
}
.sbx-google__input::-webkit-search-cancel-button,.sbx-google__input::-webkit-search-decoration,.sbx-google__input::-webkit-search-results-button,.sbx-google__input::-webkit-search-results-decoration{
    display:none
}
.sbx-google__input:hover{
    box-shadow:inset 0 0 0 1px #b3b3b3
}
.sbx-google__input:active,.sbx-google__input:focus{
    outline:0;
    box-shadow:inset 0 0 0 1px #3e82f7;
    background:#fff
}
.sbx-google__input::-webkit-input-placeholder{
    color:#aaa
}
.sbx-google__input::-moz-placeholder{
    color:#aaa
}
.sbx-google__input:-ms-input-placeholder{
    color:#aaa
}
.sbx-google__input::placeholder{
    color:#aaa
}
.sbx-google__submit{
    position:absolute;
    top:0;
    right:0;
    left:inherit;
    margin:0;
    border:0;
    border-radius:0 3px 3px 0;
    background-color:#787878;
    padding:0;
    width:49px;
    height:100%;
    vertical-align:middle;
    text-align:center;
    font-size:inherit;
    -webkit-user-select:none;
    -moz-user-select:none;
    -ms-user-select:none;
    user-select:none
    transition: transform 0.3s;
}

.sbx-google__submit svg:hover, .sbx-google__reset:hover {
    transform: scale(1.2);
}

.sbx-google__submit::before{
    display:inline-block;
    margin-right:-4px;
    height:100%;
    vertical-align:middle;
    content:''
}
.sbx-google__submit:active,.sbx-google__submit:hover{
    cursor:pointer
}
.sbx-google__submit:focus{
    outline:0
}
.sbx-google__submit svg{
    width:21px;
    height:21px;
    vertical-align:middle;
    fill:#fff
}
.sbx-google__reset{
    display:none;
    position:absolute;
    top:10px;
    right:56px;
    margin:0;
    border:0;
    background:0 0;
    cursor:pointer;
    padding:0;
    font-size:inherit;
    -webkit-user-select:none;
    -moz-user-select:none;
    -ms-user-select:none;
    user-select:none;
    fill:rgba(0,0,0,.5)
	transition: transform 0.3s;
}
.sbx-google__reset:focus{
    outline:0
}
.sbx-google__reset svg{
    display:block;
    margin:4px;
    width:13px;
    height:13px
}
.sbx-google__input:valid~.sbx-google__reset{
    display:block;
}
.searchicon{
    position:absolute;
    right:20px;
    top:0;
    bottom:0;
    content:'';
    width:25px;
     left center
}
.trashicon{
    position:absolute;
    right:55px;
    top:0;
    bottom:0;
    content:'';
    width:25px;
     left center
}
.sbx-google__input:focus,.sbx-google__input:hover{
    box-shadow:0 0 5px #fff
}
.searchplace{
    position:absolute;
    top:2%;
    right:2%;
    z-index:3
}
.glow{
    text-shadow:#000 0 0 10px,#000 0 0 10px,#000 0 0 10px,#000 0 0 10px,#000 0 0 10px,#000 0 0 10px
}
body{
    background-color:#373737
}
.bgimg{
    min-height:100%;
    max-height:100%
}
.bgimg{
    background-color:#000;
    background-image:url("data:image/svg+xml,%3Csvg width='40' height='40' viewBox='0 0 40 40' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M20 20.5V18H0v-2h20v-2H0v-2h20v-2H0V8h20V6H0V4h20V2H0V0h22v20h2V0h2v20h2V0h2v20h2V0h2v20h2V0h2v20h2v2H20v-1.5zM0 20h2v20H0V20zm4 0h2v20H4V20zm4 0h2v20H8V20zm4 0h2v20h-2V20zm4 0h2v20h-2V20zm4 4h20v2H20v-2zm0 4h20v2H20v-2zm0 4h20v2H20v-2zm0 4h20v2H20v-2z' fill='%23909090' fill-opacity='0.4' fill-rule='evenodd'/%3E%3C/svg%3E")
}
.side{
    position:absolute
}
.hide{
    display:none
}
.sidenav1{
    height:100%;
    width:0;
    position:fixed;
    z-index:1;
    top:0;
    left:0;
    background-color:#111;
    overflow-x:hidden;
    transition:.5s;
    padding-top:60px
}
.sidenav1 a{
    padding:8px 8px 8px 32px;
    text-decoration:none;
    font-size:25px;
    color:#818181;
    display:block;
    transition:.3s
}
.sidenav1 a:hover{
    color:#f1f1f1
}
.sidenav1 .closebtn{
    position:absolute;
    top:0;
    right:25px;
    font-size:36px;
    margin-left:50px
}
#main{
    transition:margin-left .5s;
    padding:16px
}
@media screen and (max-height:450px){
    .sidenav1{
        padding-top:15px
    }
    .sidenav1 a{
        font-size:18px
    }
}
.mobileMenu{
    position:absolute;
    top:1%;
    left:4%
}
.avatar1{
    z-index:1;
    position:absolute
}
.pace {
    -webkit-pointer-events: none;
    pointer-events: none;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
}
.pace-inactive {
    display: none;
}
.pace .pace-progress {
    background: #c0c0c0;
    position: fixed;
    z-index: 2000;
    top: 0;
    right: 100%;
    width: 100%;
    height: 2px;
}
 .sec1{
    margin-left: 120px;
}
.sec1{
    background-attachment: fixed;
    min-height: 100%;
    background-position: center;
    width:100%;
    height: 100vh;
    float:right;
    text-align:center;
    margin: 0 auto;
}
a {
    text-decoration:none;
}
.icon{
    display:inline-block;
    stroke-width:0;
    width:70px;
    stroke:currentColor;
    fill:currentColor
}
.w3-bar-item{
    height:15%
}
a{
    scroll-behavior: smooth;
}
</style>