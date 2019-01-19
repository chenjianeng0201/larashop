@extends('layouts.app')
@section('title', '首页')

@section('content')
  <div class="row">
    <div class="col-md-12 col-sm-12">
      <div class="Carousel">
        <img src="https://www.inkans.com/themes/yk/images/newlife2/big_xinshenghuo.jpg">
      </div>
    </div>
  </div>

  {{--new goods--}}
  <div class="row new-goods">
    <div class="col-lg-12 col-md-12 col-sm-12 goods-type-title">新品</div>
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="goods">
        <img src="http://b2b.sakura.ne.jp/ndx/images/201805/curtain/curtain2018050501/1499645354152565951.jpg"/>
        <div class="goods-introduce">
          <p><span class="left">销量：100</span><span>人气：100%</span><span class="right"><i
                class="iconfont icon-shoucang"></i></span></p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="goods">
        <img src="http://b2b.sakura.ne.jp/ndx/images/201805/curtain/curtain2018050501/1499645354152565951.jpg"/>
        <div class="goods-introduce">
          <p><span class="left">销量：100</span><span>人气：100%</span><span class="right">收藏</span></p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="goods">
        <img src="http://b2b.sakura.ne.jp/ndx/images/201805/curtain/curtain2018050501/1499645354152565951.jpg"/>
        <div class="goods-introduce">
          <p><span class="left">销量：100</span><span>人气：100%</span><span class="right">收藏</span></p>
        </div>
      </div>
    </div>
  </div>

  {{--hot goods--}}
  <div class="row hot-goods">
    <div class="col-lg-12 col-md-12 col-sm-12 goods-type-title">热门</div>
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="goods">
        <img src="http://b2b.sakura.ne.jp/ndx/images/201805/curtain/curtain2018050501/1499645354152565951.jpg"/>
        <div class="goods-introduce">
          <p><span class="left">销量：100</span><span>人气：100%</span><span class="right"><i
                class="iconfont icon-shoucang"></i></span></p>
          <p class="goods-name">窗帘001</p>
          <ul class="goods-tag">
            <li><span>美观</span></li>
            <li><span>简洁</span></li>
            <li><span>遮光强</span></li>
            <li><span>好</span></li>
            <li><span>简洁</span></li>
            <li><span>遮光强</span></li>
            <li><span>好</span></li>
          </ul>
          <p class="goods-price"><span class="goods-old-price">¥1288</span>¥998</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="goods">
        <img src="http://b2b.sakura.ne.jp/ndx/images/201805/curtain/curtain2018050501/1499645354152565951.jpg"/>
        <div class="goods-introduce">
          <p><span class="left">销量：100</span><span>人气：100%</span><span class="right">收藏</span></p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="goods">
        <img src="http://b2b.sakura.ne.jp/ndx/images/201805/curtain/curtain2018050501/1499645354152565951.jpg"/>
        <div class="goods-introduce">
          <p><span class="left">销量：100</span><span>人气：100%</span><span class="right">收藏</span></p>

        </div>
      </div>
    </div>
  </div>

  {{--recommend goods--}}
  <div class="row recommend-goods">
    <div class="col-lg-12 col-md-12 col-sm-12 goods-type-title">推荐</div>
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="goods">
        <img src="http://b2b.sakura.ne.jp/ndx/images/201805/curtain/curtain2018050501/1499645354152565951.jpg"/>
        <div class="goods-introduce">
          <p><span class="left">销量：100</span><span>人气：100%</span><span class="right"><i
                class="iconfont icon-shoucang"></i></span></p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="goods">
        <img src="http://b2b.sakura.ne.jp/ndx/images/201805/curtain/curtain2018050501/1499645354152565951.jpg"/>
        <div class="goods-introduce">
          <p><span class="left">销量：100</span><span>人气：100%</span><span class="right">收藏</span></p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="goods">
        <img src="http://b2b.sakura.ne.jp/ndx/images/201805/curtain/curtain2018050501/1499645354152565951.jpg"/>
        <div class="goods-introduce">
          <p><span class="left">销量：100</span><span>人气：100%</span><span class="right">收藏</span></p>
        </div>
      </div>
    </div>
  </div>
@stop
