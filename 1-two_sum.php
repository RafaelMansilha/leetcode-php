class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $numsSize = sizeof($nums);
        for ($i = 0; $i < $numsSize; $i++){
            for ($j = $i+1; $j < $numsSize; $j++){
                if ($nums[$i] + $nums[$j] == $target && $i <> $j){
                    return [$i,$j];
                }
            }
        }
    }
}
