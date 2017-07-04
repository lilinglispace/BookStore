<?php
namespace Home\Tool;
abstract class ACartTool {
    /**
    * 向购物车中添加1个商品
    * @param $userid int 用户id
    * @param $goods_id int 商品id
    * @param $goods_name String 商品名
    * @param $shop_price float 价格
    * @param $goods_num fint 添加的商品的数量
    * @param $goods_img String 添加的图片信息
    * @return boolean
    */
    abstract public function add($userid,$goods_id, $goods_name, $shop_price,$num,$goods_img);

    /**
    * 减少购物中1个商品的数量, 如果减至0, 则从购物车删除此商品
    * @param $goods_id int 商品id
    */
    abstract public function decr($userid,$goods_id) ;

    /**
    * 增加购物中商品的数量, 如果增加至库存量 
    * @param $goods_id int 商品id
    * @param $goods_reserve int 商品库存reserve
    */
    abstract public function addnum($userid,$goods_id,$goods_reserve) ;

    /**
    * 从购物车删除某商品
    * @param $goods_id 商品id
    */
    abstract public function del($userid,$goods_id) ;

    /**
    * 列出购物车所有的商品
    * @return Array
    */
    abstract public function items($userid) ;

    /**
    * 返回购物车中有几种商品
    * @return int
    */
    abstract public function calcType() ;

    /**
    * 返回购物中商品的个数
    * @return int
    */
    abstract public function calcCnt() ;

    /**
    * 返回购物车中商品的总价格
    * @return float
    */

    abstract public function calcMoney($userid) ;
    /**
    * 清空购物车
    * @return void
    */
    abstract public function clear($userid) ;
}


class AddTool extends ACartTool {
    //定义一个公共属性数组用来存放订单
    public $item = array();
    //声明一个静态属性
    public static $ins = null;
    //声明一个静态方法
    //确保一个用户只有一个购物车,单例模式
    public static function getIns(){
        if(self::$ins == null){
            self::$ins = new self();
        }
        return self::$ins;
    }
    //构造session
    //包括，不要继承
    protected final function __construct(){
        //取出session,三木运算
        $this->item = session('?cart')?session('cart'):array();
    }
    /**
    * 向购物车中添加1个商品
    * @param $goods_id int 商品id
    * @param $goods_name String 商品名
    * @param $shop_price float 价格
    * @return boolean
    */
    //添加商品
    public function add($userid,$goods_id, $goods_name, $shop_price,$num,$goods_img)
    {
        //若购物车内已添加该商品，则继续添加时，该商品的数量增加
        if($this->item[$userid][$goods_id])
        {
            //增加商品的数量
            $this->item[$userid][$goods_id]['num'] += $num;
        }
        //若没有则增加数组信息
        else 
        {
            //添加的商品的名称
            $goods['id']=$goods_id;
            $goods['userid']=$userid;
            $goods['goods_name'] = $goods_name;
            //该商品的单价
            $goods['shop_price'] = $shop_price;
            //加入购物车的商品的数量，默认为1
            $goods['num'] = $num;
            $goods['goods_img']=$goods_img;
            //将该商品的数组存放到公共数组中去
            $this->item[$userid][$goods_id] = $goods;
        }
    }

    /**
    * 减少购物中1个商品的数量, 如果减至0, 则从购物车删除此商品
    * @param $goods_id int 商品id
    */
    public function decr($userid,$goods_id){
        //判断该购物车中是否还有商品，若减少至0则删除，若没有则继续减少
        if($this->item[$userid][$goods_id]){
            //商品的数量递减
            $this->item[$userid][$goods_id]['num'] -= 1;
        }
        if($this->item[$userid][$goods_id]['num'] <=0){
            //删除该商品
            unset($this->item[$userid][$goods_id]);
        }
    }

    /**
    * 增加购物中1个商品的数量, 直到增加至库存量
    * @param $goods_id int 商品id
    */
    public function addnum($userid,$goods_id,$goods_reserve)
    {
        if($this->item[$userid][$goods_id]['num']<$goods_reserve)
        {
            $this->item[$userid][$goods_id]['num']+=1;
        }
        
    }

    /**
    * 从购物车删除某商品
    * @param $goods_id 商品id
    */
    public function del($userid,$goods_id){
        //删除商品
        unset($this->item[$userid][$goods_id]);
    }

    /**
    * 列出购物车所有的商品
    * @return Array
    */
    public function items($userid){
        return $this->item[$userid];
    }

    /**
    * 返回购物车中有几种商品
    * @return int
    */
    public function calcType(){
        //在添加是一个商品就是一个id，集中商品item内就有几个数组存放几个商品id
        return count($this->item);
    }

    /**
    * 返回购物中商品的个数
    * @return int
    */
    public function calcCnt(){
        //循环输出，每个id下商品的数目累加
        $n = 0;
        foreach ($this->item as $k => $v) {
            $n +=$v['num'];
        }
        return $n;
    }

    /**
    * 返回购物车中商品的总价格
    * @return float
    */

    public function calcMoney($userid){
        //购物车中商品的总价格，循环遍历数组，计算每个订单的总价格=个数*单价，累加
        $n = 0;
        foreach ($this->item[$userid] as $k => $v) {
            $n+=$v['num'] * $v['shop_price'];
        }
        return $n;
    }
    /**
    * 清空购物车
    * @return void
    */
    public function clear($userid)
    {
        //将属性数组设置为空数组，重置
        $this->item[$userid] = array();
    }

    //息构函数
    public function __destruct(){
        session('cart',$this->item);
    }
}
