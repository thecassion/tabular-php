<?php
namespace tabularphp\Common;
class AggregationFunction extends SplEnum{
    const NONE = "None";
    const SUM = "Sum";
    const AVERAGE = "Average";
    const COUNT = "Count";
    const DISTINCTCOUNT = "DistinctCount";
    const MAX = "Max";
    const MIN = "Min";
}