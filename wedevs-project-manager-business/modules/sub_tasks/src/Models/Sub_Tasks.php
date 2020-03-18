<?php
namespace WeDevs\PM_Pro\Modules\sub_tasks\src\Models;

use WeDevs\PM\Task\Models\Task;
use WeDevs\PM\Task_List\Models\Task_List;
use WeDevs\PM\Common\Models\Boardable;

class Sub_Tasks extends Task {

	public function task_lists() {
        return $this->belongsToMany( 'WeDevs\PM\Task_List\Models\Task_List', pm_tb_prefix() . 'pm_boardables', 'boardable_id', 'board_id' )
            ->where( pm_tb_prefix() . 'pm_boardables.board_type', 'task_list')
            ->where( pm_tb_prefix() . 'pm_boardables.boardable_type', 'sub_task');
    }

    public function boardables() {
        return $this->hasMany( 'WeDevs\PM\Common\Models\Boardable', 'boardable_id' )->where( 'boardable_type', 'sub_task' );
    }

    public function subtask_metas() {
        return $this->hasMany( 'WeDevs\PM\Common\Models\Meta', 'entity_id' )
            ->where( 'entity_type', 'sub_task' );
    }

}
