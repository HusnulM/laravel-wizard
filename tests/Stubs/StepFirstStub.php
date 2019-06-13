<?php

namespace Ycs77\LaravelWizard\Test\Stubs;

use Illuminate\Http\Request;
use Ycs77\LaravelWizard\Step;
use Ycs77\LaravelWizard\Test\Stubs\User;

class StepFirstStub extends Step
{
    /**
     * The step slug.
     *
     * @var string
     */
    protected $slug = 'step-first-stub';

    /**
     * The step show label text.
     *
     * @var string
     */
    protected $label = 'Step first stub';

    /**
     * The step form view path.
     *
     * @var string
     */
    protected $view = 'steps.first';

    /**
     * The step model class name.
     *
     * @var string
     */
    protected $modelClass = User::class;

    /**
     * Save this step form data.
     *
     * @param  array|null  $data
     * @return void
     */
    public function saveData($data = null)
    {
        $queue = session('test-steps-queue', []);
        $queue['first'] = true;
        session()->put('test-steps-queue', $queue);
    }

    /**
     * Validation rules.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function rules(Request $request)
    {
        return [];
    }
}
