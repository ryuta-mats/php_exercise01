<?php

function self_introduction($skills, $likes) 
{
    // コードを追記
    $skills_quantities = count($skills);
    $likes_quantities = count($likes);
    $all_skills = implode('、', $skills);
    $all_likes = implode('、', $likes);

    return <<<EOM
    私の特技は{$skills_quantities}個あり、{$all_skills}です｡

    また、趣味は{$likes_quantities}個あり、{$all_likes} です｡
    EOM;
}
