!function (e, t) {
    "use strict";
    window.lib = t(e.document);
} ('undefined' != typeof window ? window : this, function (e) {
    "use strict";
    var obj;

    /*
        base
     */
    function Lib() {
        this.lib = '0.0.1';
        this.el = null;
    }

    /*
        滚动
     */
    function Slide(params) {

    }

    Lib.prototype.getID = function(id) {
            this.el = id[0] === '#' ? e.querySelector(id) : e.querySelectorAll(id);
            return this;
    };
    Lib.prototype.click = function() {
            alert(123)
    };

    obj = {
        getDom: function(id) {
            return id[0] === '#' ? e.querySelector(id) : e.querySelectorAll(id)
        },
        createEl: function(el) {
            return document.createElement(el)
        },
        ajax: function(options) {
            /*
                url: 请求地址
                type: 请求类型
                data: 请求参数
                dataType: 请求返回这
                async: 是否开启异步
                success: 请求成功执行方法
                fail: 请求失败执行

                ajax({
                    url: 'article/create,
                    type: 'get',
                    data: {
                        user: 'snoweddy'
                    },
                    seccess: function (123) {

                    }
                });
             */
            var xhr, params;

            options = options || {}; // 默认对象
            options.type = (options.type || 'GET').toLowerCase(); // 默认get请求
            options.dataType = options.dataType || 'json'; // 默认返回数据json类型
            options.async = options.async || true; // 默认设置异步请求
            params = getParams(options.data);

            if (window.XMLHttpRequest) {
                // 非ie
                xhr = new XMLHttpRequest()
            } else {
                // ie
                xhr = new ActiveXObject('Microsoft.XMLHttp')
            }
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4) {
                    var status = xhr.status;
                    if (status >= 200 && status < 300) {
                        options.success(xhr.responseText || xhr.responseXML)
                    } else {
                        options.fail(status)
                    }
                }
            };

            if (options.type === 'get') {
                xhr.open('GET', options.url + '?' + params, options.async);
                xhr.send(null);
            } else if (options.type === 'post') {
                xhr.open('POST', options.url, options.async);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.send(params);
            }

            function getParams(data) {
                var arr = [];
                for (var param in data){
                    arr.push(encodeURIComponent(param) + '=' +encodeURIComponent(data[param]));
                }
                return arr.join('&');
            }
        },
    };
    return obj;
});

document.querySelector(".auth .blue-btn").onclick = function() {
	var 
		form = document.querySelector(".auth form"),
		name = form.name.value,
		username = form.username.value,
		pass = form.pass.value,
		str;
	
	if ((name.length >= 2) && (username.length > 5) && (pass.length >= 6)) {
		str = "qwertyuiopasdfghjklzxcvbnm1234567890QWERTYUIOPASDFGHJKLZXCVBNM";
		for (var i = 0; i < username.length; i ++) {
			if (str.indexOf(username[i]) < 0) break;
		}
		lib.ajax({
			url: '/register',
			type: 'post',
			data: {
				name: name,
				username: username,
				password: pass
			},
			success: function(data) {
				console.log(JSON.parse(data));
			}
		});
	}
}