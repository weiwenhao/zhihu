<template>
    <div>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a href="" style="margin-left: 15px">
                        <svg viewBox="0 0 200 91" class="navbar-btn" width="64" height="30" aria-hidden="true" style="fill: rgb(15, 136, 235); height: 30px; width: 64px;">
                            <g>
                                <path d="M53.29 80.035l7.32.002 2.41 8.24 13.128-8.24h15.477v-67.98H53.29v67.978zm7.79-60.598h22.756v53.22h-8.73l-8.718 5.473-1.587-5.46-3.72-.012v-53.22zM46.818 43.162h-16.35c.545-8.467.687-16.12.687-22.955h15.987s.615-7.05-2.68-6.97H16.807c1.09-4.1 2.46-8.332 4.1-12.708 0 0-7.523 0-10.085 6.74-1.06 2.78-4.128 13.48-9.592 24.41 1.84-.2 7.927-.37 11.512-6.94.66-1.84.785-2.08 1.605-4.54h9.02c0 3.28-.374 20.9-.526 22.95H6.51c-3.67 0-4.863 7.38-4.863 7.38H22.14C20.765 66.11 13.385 79.24 0 89.62c6.403 1.828 12.784-.29 15.937-3.094 0 0 7.182-6.53 11.12-21.64L43.92 85.18s2.473-8.402-.388-12.496c-2.37-2.788-8.768-10.33-11.496-13.064l-4.57 3.627c1.363-4.368 2.183-8.61 2.46-12.71H49.19s-.027-7.38-2.372-7.38zm128.752-.502c6.51-8.013 14.054-18.302 14.054-18.302s-5.827-4.625-8.556-1.27c-1.874 2.548-11.51 15.063-11.51 15.063l6.012 4.51zm-46.903-18.462c-2.814-2.577-8.096.667-8.096.667s12.35 17.2 12.85 17.953l6.08-4.29s-8.02-11.752-10.83-14.33zM199.99 46.5c-6.18 0-40.908.292-40.953.292v-31.56c1.503 0 3.882-.124 7.14-.376 12.773-.753 21.914-1.25 27.427-1.504 0 0 3.817-8.496-.185-10.45-.96-.37-7.24 1.43-7.24 1.43s-51.63 5.153-72.61 5.64c.5 2.756 2.38 5.336 4.93 6.11 4.16 1.087 7.09.53 15.36.277 7.76-.5 13.65-.76 17.66-.76v31.19h-41.71s.88 6.97 7.97 7.14h33.73v22.16c0 4.364-3.498 6.87-7.65 6.6-4.4.034-8.15-.36-13.027-.566.623 1.24 1.977 4.496 6.035 6.824 3.087 1.502 5.054 2.053 8.13 2.053 9.237 0 14.27-5.4 14.027-14.16V53.93h38.235c3.026 0 2.72-7.432 2.72-7.432z" fill-rule="evenodd">
                                </path>
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li class="nav-ative"><a href="/">首页</a></li>
                        <li><a href="">发现</a></li>
                        <li><a href="">话题</a></li>
                        <li>
                            <form class="navbar-form navbar-left" role="search" id="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="搜索您感兴趣的内容...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                                        <span style="display:inline-block;border:1px solid transparent;width:30px;height:30px;position:absolute;right:2px;z-index:100;cursor: pointer;"></span>
                                    </span>
                                </div><!-- /input-group -->
                            </form>
                        </li>
                        <li>
                            <!--弹出modal-->
                            <button type="button" class="btn btn-primary navbar-btn"
                                    @click="showModal()"
                            >
                                提问
                            </button>
                        </li>
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <li>
                            <a class=""><i class="fa fa-bell" ></i></a>
                        </li>
                        <li>
                            <a class=""><i class="fa fa-comments"></i></a>
                        </li>
                        <template v-if="user.logo">
                            <li>
                                <a href="#" style="padding-top: 10px;padding-bottom: 10px; margin-right: 15px"
                                   id="menuUser"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
                                >
                                    <img :src="user.logo" alt=""style="height: 30px;width: 30px;">
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="menuUser">
                                    <li><a href="#"><i class="fa fa-user"></i> 我的主页</a></li>
                                    <li><a href="#"><i class="fa fa-gear"></i> 设置</a></li>
                                    <li><a href="#" @click.prevent="logout()"><i class="fa fa-power-off"></i> 退出</a></li>
                                </ul>
                            </li>
                        </template>
                        <template v-else>
                            <li style="margin-left: 15px">
                                <button class="btn btn-default navbar-btn btn-blue"
                                        @click="login()"
                                >登陆</button>
                            </li>
                            <li style="margin-left: 15px">
                                <button class="btn btn-primary navbar-btn"
                                        @click="register()"
                                >加入知乎</button>
                            </li>
                        </template>
                    </ul>
                </div>
            </div>
        </nav>
        <create-question-modal ref="modal"></create-question-modal>
    </div>
</template>
<script>
    import CreateQuestionModal from './CreateQuestionModal.vue';
    /*组件选项定义,包括data,methods,等*/
    export default {
        name: 'MyNav',
        data () {
            return {
                user : {

                }
            }
        },
        components : {
            CreateQuestionModal
        },
        created(){
            let is_auth = localStorage.getItem('is_auth');
            if(Boolean(is_auth)){  //true
                this.user.id = localStorage.getItem('user_id');
                this.user.logo = localStorage.getItem('user_logo');
            }
        },
        methods : {
            showModal(){
                this.$refs.modal.showModal();
            },
            login(){
                location.href = '/login'; //todo 待构思
            },
            register(){
                location.href = '/register'; //todo 待构思
            },
            logout(){
                this.is_auth = 0;
                this.user = {};
                //存储token
                localStorage.removeItem('jwt_token')
                //存储登陆状态
                localStorage.removeItem('is_auth')
                //存储用户信息
                localStorage.removeItem('user_id')
                localStorage.removeItem('user_logo')
            }
        }
    }
</script>
<style>
    .btn-blue {
        color: #0f88eb;
        border: 1px solid #0f88eb;
    }

</style>