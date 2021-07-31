<?php

namespace TeamTeaTime\Forum\Http\Controllers\Api\Bulk;

use Illuminate\Http\Response;
use TeamTeaTime\Forum\Http\Controllers\Api\BaseController;
use TeamTeaTime\Forum\Http\Requests\Bulk\DeleteThreads;
use TeamTeaTime\Forum\Http\Requests\Bulk\MoveThreads;
use TeamTeaTime\Forum\Http\Requests\Bulk\LockThreads;
use TeamTeaTime\Forum\Http\Requests\Bulk\PinThreads;
use TeamTeaTime\Forum\Http\Requests\Bulk\UnlockThreads;
use TeamTeaTime\Forum\Http\Requests\Bulk\UnpinThreads;
use TeamTeaTime\Forum\Http\Requests\Bulk\RenameThreads;
use TeamTeaTime\Forum\Http\Requests\Bulk\RestoreThreads;

class ThreadController extends BaseController
{
    public function move(MoveThreads $request): Response
    {
        $result = $request->fulfill();

        if (is_null($result)) {
            return $this->invalidSelectionResponse();
        }

        return $this->bulkActionResponse($result->count(), 'threads.updated');
    }

    public function lock(LockThreads $request): Response
    {
        $result = $request->fulfill();

        if (is_null($result)) {
            return $this->invalidSelectionResponse();
        }

        return $this->bulkActionResponse($result->count(), 'threads.updated');
    }

    public function unlock(UnlockThreads $request): Response
    {
        $result = $request->fulfill();

        if (is_null($result)) {
            return $this->invalidSelectionResponse();
        }

        return $this->bulkActionResponse($result->count(), 'threads.updated');
    }

    public function pin(PinThreads $request): Response
    {
        $result = $request->fulfill();

        if (is_null($result)) {
            return $this->invalidSelectionResponse();
        }

        return $this->bulkActionResponse($result->count(), 'threads.updated');
    }

    public function unpin(UnpinThreads $request): Response
    {
        $result = $request->fulfill();

        if (is_null($result)) {
            return $this->invalidSelectionResponse();
        }

        return $this->bulkActionResponse($result->count(), 'threads.updated');
    }

    public function destroy(DeleteThreads $request): Response
    {
        $result = $request->fulfill();

        if (is_null($result)) {
            return $this->invalidSelectionResponse();
        }

        return $this->bulkActionResponse($result->count(), 'threads.deleted');
    }

    public function restore(RestoreThreads $request): Response
    {
        $result = $request->fulfill();

        if (is_null($result)) {
            return $this->invalidSelectionResponse();
        }

        return $this->bulkActionResponse($result->count(), 'threads.updated');
    }
}
