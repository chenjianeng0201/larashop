<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->increments('goods_id');
            $table->unsignedInteger('cate_id')->comment('分类id')->index();
            $table->foreign('cate_id')->references('cate_id')->on('categories');
            $table->char('goods_sn', 30)->unique()->comment('商品番号');
            $table->char('goods_name', 60)->index()->comment('商品名称');
            $table->unsignedInteger('click_count')->default(0)->comment('商品点击量');
            $table->unsignedInteger('goods_stock')->default(1)->comment('商品库存');
            $table->decimal('cost_price', 8, 2)->comment('商品成本价');
            $table->decimal('shop_price', 8, 2)->comment('商品店铺价');
            $table->decimal('market_price', 8, 2)->comment('商品市场价');
            $table->char('title')->nullable()->comment('seo标题');
            $table->char('keyword')->nullable()->comment('seo关键字');
            $table->char('description')->nullable()->comment('seo描述');
            $table->boolean('is_on_sale')->default(0)->comment('是否出售');
            $table->boolean('is_new')->default(0)->comment('是否新品');
            $table->boolean('is_hot')->default(0)->comment('是否热门');
            $table->boolean('is_recommend')->default(0)->comment('是否推荐');
            $table->unsignedInteger('sort')->default(50)->comment('商品排序');
            $table->char('goods_tag')->nullable()->comment('商品标签');
            $table->char('goods_desc')->nullable()->comment('商品描述');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('goods');
    }
}
