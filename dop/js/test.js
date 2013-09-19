/* zSlider v1.0, Nikolai Zimfer, December 2012 */
var zSlider=function(){
    function e(){
        var e=(new Date).getTime();
        if(sld.tran=="LeftRight"){
            var t=-1*sld.wdth*sld.curr;
            var r=-1*sld.wdth*sld.next;
            setTimeout(function(){
                var n=((new Date).getTime()-e)/sld.tmtr;
                sld.firstChild.style.backgroundPosition=(r-t)*n+t+"px";
                if(n<1)setTimeout(arguments.callee,10);else sld.firstChild.style.backgroundPosition=r+"px"
                    },10)
            }else if(sld.tran=="Left"){
            var t=-1*sld.wdth*sld.curr;
            div=n("100%","100%",sld.wdth,0,sld.next);
            setTimeout(function(){
                var n=((new Date).getTime()-e)/sld.tmtr;
                div.style.left=sld.wdth-sld.wdth*n+"px";
                sld.firstChild.style.backgroundPosition=t-sld.wdth*n+"px";
                if(n<1){
                    setTimeout(arguments.callee,10)
                    }else{
                    div.style.left="0px";
                    sld.firstChild.style.backgroundPosition=-1*sld.wdth*sld.next+"px";
                    div.parentNode.removeChild(div)
                    }
                },10)
        }else if(sld.tran=="inLeft"){
        div=n("100%","100%",sld.wdth,0,sld.next);
        setTimeout(function(){
            var t=((new Date).getTime()-e)/sld.tmtr;
            div.style.left=sld.wdth-sld.wdth*t+"px";
            if(t<1){
                setTimeout(arguments.callee,10)
                }else{
                div.style.left="0px";
                sld.firstChild.style.backgroundPosition=-1*sld.wdth*sld.next+"px";
                div.parentNode.removeChild(div)
                }
            },10)
    }else if(sld.tran=="inRight"){
    div=n("100%","100%",-sld.wdth,0,sld.next);
    setTimeout(function(){
        var t=((new Date).getTime()-e)/sld.tmtr;
        div.style.left=-1*sld.wdth+sld.wdth*t+"px";
        if(t<1){
            setTimeout(arguments.callee,10)
            }else{
            div.style.left="0px";
            sld.firstChild.style.backgroundPosition=-1*sld.wdth*sld.next+"px";
            div.parentNode.removeChild(div)
            }
        },10)
}else if(sld.tran=="toRight"){
    div=n("0px","100%",0,0,sld.next);
    div.style.borderRight="1px solid "+sld.colr;
    setTimeout(function(){
        var t=((new Date).getTime()-e)/sld.tmtr;
        div.style.width=sld.wdth*t+"px";
        if(t<1){
            setTimeout(arguments.callee,10)
            }else{
            div.style.width=sld.wdth+"px";
            sld.firstChild.style.backgroundPosition=-1*sld.wdth*sld.next+"px";
            div.parentNode.removeChild(div)
            }
        },10)
}else if(sld.tran=="fade"){
    div=n("100%","100%",0,0,sld.curr);
    sld.firstChild.style.backgroundPosition=-1*sld.wdth*sld.next+"px";
    setTimeout(function(){
        var t=((new Date).getTime()-e)/sld.tmtr;
        div.style.opacity=1-t;
        div.style.filter="alpha(opacity = "+(1-t)*100+")";
        if(t<1)setTimeout(arguments.callee,10);else div.parentNode.removeChild(div)
            },10)
    }else if(sld.tran=="sliceRight"){
    var i=-1*sld.wdth*sld.next;
    var s=Math.round(sld.wdth/sld.slic);
    for(var o=0;o<sld.slic;o++){
        div=n("0px","100%",o*s,0,sld.curr);
        div.style.backgroundPosition=i-o*s+"px 0px"
        }
        setTimeout(function(){
        var t=((new Date).getTime()-e)/sld.tmtr;
        for(p=0;p<sld.slic;p++){
            d=sld.firstChild.childNodes[p];
            wdth=Math.round(s*t-p*6);
            if(wdth>0&&wdth<s)d.style.width=wdth+"px";
            if(wdth>=s)d.style.width=s+"px"
                }
                if(parseInt(sld.firstChild.childNodes[sld.slic-1].style.width)<sld.wdth-s*(sld.slic-1)){
            setTimeout(arguments.callee,10)
            }else{
            sld.firstChild.style.backgroundPosition=i+"px 0px";
            for(k=0;k<sld.slic;k++){
                a=sld.firstChild.firstChild;
                a.parentNode.removeChild(a)
                }
            }
        },10)
}else if(sld.tran=="BlocksLine"||sld.tran=="BlocksRnd"||sld.tran=="BlocksLineColor"||sld.tran=="BlocksRndColor"){
    var i=-1*sld.wdth*sld.next;
    var u=Math.round(sld.wdth/sld.cols);
    var f=Math.round(sld.hght/sld.rows);
    var l=Math.round(sld.tmtr/sld.cols/sld.rows);
    var c=[];
    var h=[];
    var p=0;
    for(var v=0;v<sld.rows;v++){
        for(var m=0;m<sld.cols;m++){
            div=document.createElement("div");
            div.style.width=u+"px";
            div.style.height=f+"px";
            div.style.position="absolute";
            div.style.left=u*m+"px";
            div.style.top=f*v+"px";
            sld.firstChild.appendChild(div);
            c[p]=p;
            h[p]="-"+(m*u-i)+"px -"+v*f+"px";
            p++
        }
        }
        if(sld.tran=="BlocksRnd"||sld.tran=="BlocksRndColor"){
    var g,y;
    for(var o=0;o<c.length;o++){
        y=Math.floor(Math.random()*c.length);
        g=c[o];
        tmp2=h[o];
        c[o]=c[y];
        h[o]=h[y];
        c[y]=g;
        h[y]=tmp2
        }
    }
    p=0;
setTimeout(function(){
    if(sld.tran=="BlocksLineColor"||sld.tran=="BlocksRndColor"){
        if(p<sld.cols*sld.rows)sld.firstChild.childNodes[c[p]].style.backgroundColor=sld.colr
            }
            if(p>0){
        sld.firstChild.childNodes[c[p-1]].style.backgroundImage=sld.img;
        sld.firstChild.childNodes[c[p-1]].style.backgroundPosition=h[p-1]
        }
        p++;
    if(p<=sld.cols*sld.rows){
        setTimeout(arguments.callee,l)
        }else{
        sld.firstChild.style.backgroundPosition=i+"px 0px";
        for(k=0;k<sld.cols*sld.rows;k++){
            a=sld.firstChild.firstChild;
            a.parentNode.removeChild(a)
            }
        }
    },l)
}else sld.firstChild.style.backgroundPosition=-1*sld.wdth*sld.next+"px 0px"
    }
    function n(e,t,n,r,i){
    var s=document.createElement("div");
    s.style.width=e;
    s.style.height=t;
    s.style.position="absolute";
    s.style.left=n+"px";
    s.style.top=r+"px";
    s.style.backgroundImage=sld.img;
    s.style.backgroundPosition=-1*sld.wdth*i+"px";
    sld.firstChild.appendChild(s);
    return s
    }
    function r(){
    for(j=0;j<sld.imgs;j++){
        btn=sld.lastChild.childNodes[j];
        if(j==sld.next)btn.setAttribute("class","sliderBtnC");else btn.setAttribute("class","sliderBtn")
            }
        }
    function i(){
    sld=this.parentNode;
    sld.next++;
    if(sld.next==sld.imgs){
        sld.next=0
        }
        e();
    r();
    sld.curr=sld.next
    }
    function s(){
    sld=this.parentNode.parentNode;
    sld.next=this.ind;
    r();
    e();
    sld.curr=sld.next
    }
    return{
    ini:function(e){
        e.src="slider.jpg";
        e.imgs=7;
        e.wdth=600;
        e.hght=340;
        e.tmtr=333;
        e.colr="red";
        e.tran="Left";
        e.ctrl=false;
        e.ctrx=0;
        e.ctry=0;
        e.slic=12;
        e.cols=8;
        e.rows=4;
        e.curr=0;
        e.next=0;
        e.play=false;
        t=e.title;
        arr=t.split(";");
        for(var n=0;n<arr.length;n++){
            a=arr[n].split(":");
            key=a[0].replace(/^\s+/,"").replace(/\s+$/,"");
            val=a[1].replace(/^\s+/,"").replace(/\s+$/,"");
            e[key]=val
            }
            e.img="url("+e.src+")";
        e.title="";
        var r=document.createElement("div");
        r.style.width=e.wdth+"px";
        r.style.height=e.hght+"px";
        r.style.position="relative";
        r.style.overflow="hidden";
        r.style.cursor="pointer";
        r.className="sliderBox";
        r.style.backgroundImage=e.img;
        r.style.backgroundPosition="0px 0px";
        e.appendChild(r);
        r.onclick=i;
        brdL=parseInt(r.style.borderLeftWidth)>0?parseInt(r.style.borderLeftWidth):0;
        brdR=parseInt(r.style.borderRightWidth)>0?parseInt(r.style.borderRightWidth):0;
        e.style.width=parseInt(e.wdth)+brdL+brdR+"px";
        if(e.ctrl=="yes"){
            var o=document.createElement("div");
            o.style.position="relative";
            if(e.ctrx=="left"||e.ctrx=="center"||e.ctrx=="right")o.style.textAlign=e.ctrx;else o.style.left=e.ctrx+"px";
            o.style.top=e.ctry+"px";
            e.appendChild(o);
            for(var u=0;u<e.imgs;u++){
                var f=document.createElement("div");
                f.onclick=s;
                f.appendChild(document.createTextNode(u+1));
                o.appendChild(f);
                f.ind=u;
                if(u==e.curr)f.setAttribute("class","sliderBtnC");else f.setAttribute("class","sliderBtn")
                    }
                }
        }
}
}()