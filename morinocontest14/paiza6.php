<?php
public function reorder(int $project_id, int $start, int $end): void
    {
        $items = Task::where('project_id', $project_id)
            ->orderBy('priority')->pluck('priority', 'id')->toArray();

        if ($start > count($items) || $end > count($items)) {
            return;
        }

        $ids = [];
        $priorities = [];
        foreach ($items as $id => $priority) {
            $ids[] = $id;
            $priorities[] = $priority;
        }

        $out_priority = array_splice($priorities, $start - 1, 1);
        array_splice($priorities, $end - 1, 0, $out_priority);

        $when_then = "";
        $where_in = "";
        foreach ($priorities as $out_k => $out_v) {
            $id = $ids[$out_v - 1];
            $when_then .= "WHEN ".$id." THEN ".($out_k + 1)." ";
            $where_in .= $id.",";
        }

        $table_name = (new Task())->getTable();
        $bulk_update_query = "UPDATE `".$table_name
            ."` SET `priority` = (CASE `id` ".$when_then."END)"
            ." WHERE `id` IN(".substr($where_in, 0, -1).")"
            ." AND `deleted_at` IS NULL;"; // soft delete

        DB::update($bulk_update_query);
    }
?>
