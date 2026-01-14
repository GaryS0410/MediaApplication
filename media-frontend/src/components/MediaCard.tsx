import React from 'react'

export const MediaCard = () => {
  return (
    <div className="card bg-base-100 w-96 shadow-sm">
      <figure>
        <img src="" alt="Poster here"/>
        <div className="card-body">
          <h2 className="card-title"> Media Title</h2>
          <p>Release Date</p>
          <div className="card-actions justify-end">
            <button className="btn btn-primary">View Details</button>
          </div>
        </div>
      </figure>
    </div>
  )
}
