<?php namespace My; 
function strlen($arr) {    return count($arr) * 2; } 
echo strlen(['A', 'B','C']);
// 過度思考 只是在算['A', 'B','C']的strlen — 获取字符串长度