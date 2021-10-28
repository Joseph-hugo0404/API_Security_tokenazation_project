<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFlightsRequest;
use App\Http\Requests\UpdateFlightsRequest;
use App\Repositories\FlightsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class FlightsController extends AppBaseController
{
    /** @var  FlightsRepository */
    private $flightsRepository;

    public function __construct(FlightsRepository $flightsRepo)
    {
        $this->flightsRepository = $flightsRepo;
    }

    /**
     * Display a listing of the Flights.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $flights = $this->flightsRepository->all();

        return view('flights.index')
            ->with('flights', $flights);
    }

    /**
     * Show the form for creating a new Flights.
     *
     * @return Response
     */
    public function create()
    {
        return view('flights.create');
    }

    /**
     * Store a newly created Flights in storage.
     *
     * @param CreateFlightsRequest $request
     *
     * @return Response
     */
    public function store(CreateFlightsRequest $request)
    {
        $input = $request->all();

        $flights = $this->flightsRepository->create($input);

        Flash::success('Flights saved successfully.');

        return redirect(route('flights.index'));
    }

    /**
     * Display the specified Flights.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $flights = $this->flightsRepository->find($id);

        if (empty($flights)) {
            Flash::error('Flights not found');

            return redirect(route('flights.index'));
        }

        return view('flights.show')->with('flights', $flights);
    }

    /**
     * Show the form for editing the specified Flights.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $flights = $this->flightsRepository->find($id);

        if (empty($flights)) {
            Flash::error('Flights not found');

            return redirect(route('flights.index'));
        }

        return view('flights.edit')->with('flights', $flights);
    }

    /**
     * Update the specified Flights in storage.
     *
     * @param int $id
     * @param UpdateFlightsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFlightsRequest $request)
    {
        $flights = $this->flightsRepository->find($id);

        if (empty($flights)) {
            Flash::error('Flights not found');

            return redirect(route('flights.index'));
        }

        $flights = $this->flightsRepository->update($request->all(), $id);

        Flash::success('Flights updated successfully.');

        return redirect(route('flights.index'));
    }

    /**
     * Remove the specified Flights from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $flights = $this->flightsRepository->find($id);

        if (empty($flights)) {
            Flash::error('Flights not found');

            return redirect(route('flights.index'));
        }

        $this->flightsRepository->delete($id);

        Flash::success('Flights deleted successfully.');

        return redirect(route('flights.index'));
    }
}
