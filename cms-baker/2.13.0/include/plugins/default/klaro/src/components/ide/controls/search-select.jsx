import React, { useState } from 'react';
import { BaseRetractingLabelInput } from './input';

export const SearchSelect = ({search, disabled, label, description, onSelect, setSearch, candidates}) => {

    const items = candidates.slice(0, 10).map((candidate) => (
        <li
            onClick={() => onSelect(candidate)}
            key={candidate.name}
            className="cm-candidate"
        >
            {candidate.value}
            {
                candidate.description &&
                <p>
                    {candidate.description}
                </p>
            }
        </li>
    ));

    if (candidates.length > 10)
        items.push(<li key="hasMore" className="cm-candidate">...</li>)

    let searchCandidates
    if (items.length > 0)
        searchCandidates = <ul className="cm-candidates">{items}</ul>;

    return <div className="cm-search-select">
        <form onSubmit={(e) => {e.preventDefault();onSelect()}}>
            <fieldset disabled={disabled}>
                <BaseRetractingLabelInput
                    onChange={setSearch}
                    label={label}
                    disabled={disabled}
                    description={description}
                    autoComplete="off"
                    value={search}
                >
                    {searchCandidates}
                </BaseRetractingLabelInput>
            </fieldset>
        </form>
    </div>

}
