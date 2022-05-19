<template>
    <ais-instant-search :search-client="searchClient" index-name="customers:accessed_at:desc" :routing="routing"> <!-- Working -->
    <!-- <ais-instant-search :search-client="searchClient" index-name="customers" :routing="routing">  --> <!-- Not working -->
        <ais-search-box :classNames="{
                'ais-SearchBox-form': 'input-group',
                'ais-SearchBox-input': 'form-control',
                'ais-SearchBox-submit': 'btn btn-light border border-grey input-group-text rounded-end',
                'ais-SearchBox-reset': 'btn btn-light border border-grey'
            }"
            v-model="searchText">
        </ais-search-box>

        <ais-sort-by :items="[{ label: 'Zugriff', value: 'customers:accessed_at:desc' }]" class="d-none"></ais-sort-by>

        <ais-hits v-slot="{ items }">
            <div class="list-group mt-4">

                <div class="list-group-item">
                    <div class="row">
                        <div class="col-md-6">
                            Name
                        </div>
                        <div class="col-md-3">
                            Accessed at
                        </div>
                    </div>
                </div>

                <button
                    v-for="(item, itemIndex) in items"
                    :key="itemIndex"
                    class="list-group-item list-group-item-action"
                    type="button">

                    <div class="row">
                        <div class="col-md-6">
                            <ais-highlight :hit="item" attribute="name" />
                        </div>
                        <div class="col-md-3">
                            <ais-highlight :hit="item" attribute="accessed_at" />
                        </div>
                    </div>

                </button>
            </div>
        </ais-hits>
    </ais-instant-search>
</template>

<script>
import {
    AisInstantSearch,
    AisSearchBox,
    AisSortBy,
    AisHits,
    AisHighlight,
} from 'vue-instantsearch/vue3/es'
import { instantMeiliSearch } from '@meilisearch/instant-meilisearch'

import { history } from 'instantsearch.js/es/lib/routers'
import { simple } from 'instantsearch.js/es/lib/stateMappings'

export default {
    mounted() {
        console.log('Component mounted.')
    },
    components: {
        AisInstantSearch,
        AisSearchBox,
        AisHits,
        AisHighlight,
        AisSortBy,
    },
    data() {
        return {
            searchClient: instantMeiliSearch(`http://127.0.0.1:7700`),
            routing: {
                router: history(),
                stateMapping: simple(),
            },
            searchText: "",
        }
    },
}
</script>
