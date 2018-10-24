window.onload = function (){
               
     //验证用户名
                var uname = document.getElementById('uname');
                var nd = document.getElementById('name');
                // console.log(uname);
               var aaa;
                //单击时
               nd.onclick = function(){
                   nd.className = '';
                   nd.innerHTML = '';
                   uname.focus();
                }
                //失去焦点时
                uname.onblur = function(){
                    var vs = this.value.trim();
                    // console.log(vs);
                    //判断用户名是否为空
                    if(vs == ''){
                        // var nd = document.getElementById('name');
                        nd.className = 'SignFlowInput-errorMask undefined SignFlowInput-requiredErrorMask';
                        nd.innerHTML = '请输入用户名';
                        aaa = false;
                        return;
                    }
                    //判断用户名格式  \u4E00-\u9FA5 中文
                    //  /^(\w|-|[\u4E00-\u9FA5])*$/整个的意思是匹配一个 数字，字母，下划线，-，中文组成的一个字串 
                    var names = /^(\w|-|[\u4E00-\u9FA5])*$/;
                    var res = names.test(vs);//test() 方法用于检测一个字符串是否匹配某个模式
                    // console.log(res);
                    //判断用户名是否符合
                    if (!res) {
                        nd.className = 'SignFlowInput-errorMask undefined SignFlowInput-requiredErrorMask';
                        nd.innerHTML = '用户名不符合要求';
                        aaa = false;
                        return;
                    }
                    //判断用户名长度
                        if (vs.length <1 || vs.length >8) {
                            nd.className = 'SignFlowInput-errorMask undefined SignFlowInput-requiredErrorMask';
                            nd.innerHTML = '用户名不能超过8个字符';
                            aaa = false;
                            return;
                        }
                       aaa = true;
                 }

    //验证密码
                var psword = document.getElementById('psword');
                // console.log(psword);
                var pword = document.getElementById('pword');
                // console.log(pword);
                //单击事件
                pword.onclick = function(){
                    pword.className = '';
                    pword.innerHTML = '';
                    psword.focus();
                }
                //失去焦点时
                psword.onblur = function(){
                    var vpass = this.value.trim();
                    if (vpass == '') {
                        pword.className = 'SignFlowInput-errorMask undefined SignFlowInput-requiredErrorMask';
                        pword.innerHTML = '密码不能为空';
                        aaa = false;
                        return;
                    }
                    aaa = true;
                }
    //验证确认密码
                var repsword = document.getElementById('repsword');
                // console.log(repsword);
                var repword = document.getElementById('repword');
                // console.log(repword);
                //单击事件
                repword.onclick = function(){
                    repword.className = '';
                    repword.innerHTML = '';
                    repsword.focus();
                }
                //失去焦点         
                repsword.onblur = function(){
                    var vpass  = psword.value.trim();
                    // console.log(vpass);
                    //判断两次密码是否一致
                    var vrepass = repsword.value.trim();
                    if (vpass !== vrepass) {
                        repword.className = 'SignFlowInput-errorMask undefined SignFlowInput-requiredErrorMask';
                        repword.innerHTML = '两次输入密码不一致';
                        aaa = false;
                        return;
                    }
                    //判断确认密码是否为空
                    if (vrepass == '') {
                        repword.className =  'SignFlowInput-errorMask undefined SignFlowInput-requiredErrorMask';
                        repword.innerHTML = '确认密码不能为空';
                        aaa = false;
                        return;
                    }
                   aaa = true;
                }

    //手机号验证
                var tel = document.getElementById('tel');
                var tels = document.getElementById('tels');
                //单击事件
                tels.onclick = function(){
                    tels.className = '';
                    tels.innerHTML = '';
                    tel.focus();
                }
                //失去焦点事件
                tel.onblur = function(){
                    var vtel = this.value.trim();
                    // console.log(vtel);
                    //判断手机号码是否为空
                    if (vtel == '') {
                        tels.className = 'SignFlowInput-errorMask undefined SignFlowInput-requiredErrorMask';
                        tels.innerHTML = '请输入手机号';
                        aaa = false;
                        return;
                    }
                    //判断手机号码格式
                    var tll = /^(13[0-9]|14[579]|15[0-3,5-9]|16[6]|17[0135678]|18[0-9]|19[89])\d{8}$/;
                    var te = tll.test(vtel);
                    // console.log(te);
                    if (!te) {
                        tels.className = 'SignFlowInput-errorMask undefined SignFlowInput-requiredErrorMask';
                        tels.innerHTML = '手机号码格式不正确';
                        aaa = false;
                        return;
                    }
                   aaa = true;
                }

    //验证邮箱
                var email = document.getElementById('email');
                var remail = document.getElementById('remail');
                //单击事件
                remail.onclick = function(){
                    remail.className = '';
                    remail.innerHTML = '';
                    email.focus();
                }
                //失去焦点事件
                email.onblur = function(){
                    var emails = this.value.trim();
                    //邮箱不能为空
                    if (emails == '') {
                        remail.className = 'SignFlowInput-errorMask undefined SignFlowInput-requiredErrorMask';
                        remail.innerHTML = '邮箱不能为空';
                        aaa = false;
                        return;
                    }
                    //判断邮箱格式
                    var ems = /^[A-Za-z0-9\u4e00-\u9fa5]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/;
                    var a = ems.test(emails);
                    if (!a) {
                        remail.className = 'SignFlowInput-errorMask undefined SignFlowInput-requiredErrorMask';
                        remail.innerHTML = '邮箱格式不正确';
                        aaa = false;
                        return;
                    }
                    aaa = true;
                }
                
     //onsubmit
                var forms = document.getElementById('forms');
                forms.onsubmit = function(){
                   if (aaa) {
                        return true;
                   }
                         //阻止默认行为
                        return false;
                    
                }

}
           


    
         