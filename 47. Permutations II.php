class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function permuteUnique($nums) {
        $tree = $this->buildTree($nums);
        $result = $this->treeExtractor($tree);
        if (count($result, COUNT_RECURSIVE) > 1){
            return $result;
        } else {
            return array($result);
        }
    }
    function buildTree($nums){
            $return = array();
            if (sizeof($nums) == 1){
                return array_pop($nums);
            } else {
                foreach ($nums as $key => $value){
                    $aux = $nums;
                    unset($aux[$key]);
                    $return[$value] = $this->buildTree($aux);
                }
                return $return;
            }
        }
    function treeExtractor($tree){
        $return = array();
        if (is_array($tree)) {
            foreach ($tree as $key => $value){
                $aux = $this->treeExtractor($value);
                foreach ($aux as $a){
                    if (is_array($a)) {
                        $return[] = array_merge(array($key), $a);
                    } else {
                        $return[] = array_merge(array($key), array($a));
                    }
                }
            }
        }else{
            return array($tree);
        }
        return $return;
    }
}
