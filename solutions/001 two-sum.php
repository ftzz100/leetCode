class Solution {

    /**
    * @param Integer[] $nums
    * @param Integer $target
    * @return Integer[]
    */
    // 1. 遍历两个数的所有组合最简单粗暴，但是内存不许
    // 2. 因为两个数之和是固定的一种情况，可以通过「和」找另一个数
    function twoSum($nums, $target) {
        foreach($nums as $key=>$val){
            for($i=0;$i<count($nums);$i++){
                $theY = $target - $nums[$i];
                for($j=$i+1;$j<count($nums);$j++){
                    if($nums[$j] == $theY){
                        return [0=>$i,1=>$j];
                        break;
                    }
                }
            }
        }
    }
}