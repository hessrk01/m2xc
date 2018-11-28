<?php

if (! function_exists('getShowcaseSkill')) {
    function getShowcaseSkill() {

        $skill = array(
            'Project Management',
            'Application Configuration',
            'Process Analysis',
            'Process Redesign',
            'Custom Development',
        );

        return $skill[array_rand($skill, 1)];
    }
}
 