<?php

namespace App\Helpers;

use App\Models\Task;
use Carbon\Carbon;

class Helper
{
    public static function renderPopupTask($task){
        $html = '<div class="white-popup">';
        $html .= '<legend align="center">Информация о задании №' . $task->id . '</legend>';

        $html .= '<div class="row form-group">';
        $html .= '<div class="col-sm-4">';
        $html .= '<h5>Name</h5>';
        $html .= '</div>';
        $html .= '<div class="col-sm-8">';
        $html .= '<input class="form-control" type="text" readonly placeholder="' . $task->title . '">';
        $html .= '</div>';
        $html .= '</div>';

        $html .= '<div class="row form-group">';
        $html .= '<div class="col-sm-4">';
        $html .= '<h5>Date of completion</h5>';
        $html .= '</div>';
        $html .= '<div class="col-sm-8">';
        $html .= '<input class="form-control" type="text" readonly placeholder="' . Carbon::now()->addHours($task->id) . '">';
        $html .= '</div>';
        $html .= '</div>';

        $html .= '<div class="row form-group">';
        $html .= '<div class="col-sm-4">';
        $html .= '<h5>Author</h5>';
        $html .= '</div>';
        $html .= '<div class="col-sm-8">';
        $html .= '<input class="form-control" type="text" readonly placeholder="' . $task->author . '"">';
        $html .= '</div>';
        $html .= '</div>';

        $html .= '<div class="row form-group">';
        $html .= '<div class="col-sm-4">';
        $html .= '<h5>Status</h5>';
        $html .= '</div>';
        $html .= '<div class="col-sm-8">';
        $html .= '<input class="form-control" type="text" readonly placeholder="' . $task->status . '">';
        $html .= '</div>';
        $html .= '</div>';

        $html .= '<div class="row form-group">';
        $html .= '<div class="col-sm-4">';
        $html .= '<h5>Description</h5>';
        $html .= '</div>';
        $html .= '<div class="col-sm-8">';
        $html .= '<input class="form-control" type="text" readonly placeholder="' . $task->description . '">';
        $html .= '</div>';
        $html .= '</div>';

        return $html;
    }
}

