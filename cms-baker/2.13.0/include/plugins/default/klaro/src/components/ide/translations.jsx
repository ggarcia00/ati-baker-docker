import React from 'react';
import translations from '../../translations/index';
import { Tabs, Tab } from './tabs';
import { BaseRetractingLabelInput } from './controls';
import { getValue, getFallbackValue } from './utils/i18n'

export const TranslationsForKey = ({hintKey, translationKey, noDefault, onChange, name, translations, languages, t, config, value, fallbackValue}) => {
    /*
    Here we list the different translations
    */
    const allLanguages = [...(noDefault ? [] : ['zz']),...languages]
    const description = t(['translations', ...hintKey, 'description'], {name: name})
    const items = allLanguages.map(language => {
        const value = getValue(translations, language, translationKey)
        const fallbackValue = getFallbackValue(t.tv , language, translationKey)
        const isDefault = (value && value === fallbackValue) || ((!value) && fallbackValue !== undefined)
        const changeValue = (v) => {
            if (v === fallbackValue || v === ''){
                onChange(language, undefined)
            }
            else
                onChange(language, v)
        }
        const label = t(['translations', ...hintKey, language === 'zz' ? 'defaultLabel' : 'label'], {name: name, language: t(['languages', language])})
        return <li key={language}>
            <span className="cm-lang">{language !== 'zz' ? language : '_'}</span>
            <BaseRetractingLabelInput
                onChange={changeValue}
                label={[...label, ...(isDefault ? [' ',...t(['translations', 'defaultValue'])] : [])]}
                value={value || fallbackValue || ''}
            />
        </li>
    })
    return <div className="cm-translations-for-key">
        <h4>{t(['translations', ...hintKey, 'label'], {name: name})}</h4>
        <p>
            {description}
        </p>
        <ul>
            {items}
        </ul>
    </div>
}

export const ServiceTranslations = ({t, config, updateConfig}) => {
    const updateDescription = (service, language, value) => {
        updateConfig(['services', service._id, 'translations', language, 'description'], value)
    }
    const updateTitle = (service, language, value) => {
        updateConfig(['services', service._id, 'translations', language, 'title'], value)        
    }
    const serviceTranslations = config.services.map(service => <React.Fragment key={service.name}>
        <h3>{service.name}</h3>
        <TranslationsForKey
            onChange={(language, value) => updateTitle(service, language, value)}
            t={t}
            hintKey={['services', 'title']}
            translationKey={['title']}
            name={service.name}
            translations={service.translations || {}}
            languages={config.languages} />
        <TranslationsForKey
            onChange={(language, value) => updateDescription(service, language, value)}
            t={t}
            hintKey={['services', 'description']}
            translationKey={['description']}
            name={service.name}
            translations={service.translations || {}}
            noDefault
            languages={config.languages} />
    </React.Fragment>)
    return <React.Fragment>
        {
            serviceTranslations.length > 0 && serviceTranslations || <p className="cm-section-description">
                {t(['translations', 'noTranslations'])}
            </p>
        }
    </React.Fragment>

}

export const PurposeTranslations = ({t, config, updateConfig}) => {
    const purposes = new Set()
    config.services.forEach(service => service.purposes.forEach(purpose => purposes.add(purpose)))
    const updateDescription = (purpose, language, value) => {
        updateConfig(['translations', language, 'purposes', purpose, 'description'], value)        
    }
    const updateTitle = (purpose, language, value) => {
        updateConfig(['translations', language, 'purposes', purpose, 'title'], value)        
    }
    const purposeTranslations = Array.from(purposes.keys()).map(purpose => <React.Fragment key={purpose}>
        <h3>{purpose}</h3>
        <TranslationsForKey
            t={t}
            onChange={(language, value) => updateTitle(purpose, language, value)} 
            translationKey={['purposes', purpose, 'title']}
            hintKey={['purposes', 'title']}
            name={purpose}
            translations={config.translations}
            languages={config.languages} />
        <TranslationsForKey
            t={t}
            onChange={(language, value) => updateDescription(purpose, language, value)}
            hintKey={['purposes', 'description']}
            translationKey={['purposes', purpose, 'description']}
            name={purpose}
            translations={config.translations}
            noDefault
            languages={config.languages} />
    </React.Fragment>)
    return <React.Fragment>
        {
            purposeTranslations.length > 0 && purposeTranslations || <p className="cm-section-description">
                {t(['translations', 'noTranslations'])}
            </p>
        }
    </React.Fragment>
}

export const PrivacyPolicyUrlTranslations = ({t, config, updateConfig}) => {
    const updateUrl = (language, value) => {
        updateConfig(['translations', language, 'privacyPolicyUrl'], value)        
    }
    return <TranslationsForKey
        t={t}
        hintKey={['privacyPolicyUrl']}
        name="privacyPolicyUrl"
        translationKey={['privacyPolicyUrl']}
        translations={config.translations}
        languages={config.languages}
        onChange={updateUrl} />

}


export const UITranslations = ({t, config, updateConfig}) => {

    const translationsFor = (translations, parentKey) => {
        const items = []
        for(const [k, v] of Object.entries(translations)){

            // we skip the purposes and services sections as they are covered
            // by other translation dialogs
            if (parentKey.length === 0 && (k === "purposes" || k === "services"))
                continue

            let content
            const key = [...parentKey, k]
            if (typeof v === "object"){
                content = translationsFor(v, key)
            } else {
                content = <TranslationsForKey
                    onChange={(language, value) => updateConfig(["translations", language, ...key], value, true)}
                    t={t}
                    hintKey={key}
                    noDefault={true}
                    translationKey={key}
                    name={key.join(".")}
                    key={key.join(".")}
                    translations={config.translations}
                    languages={config.languages} />
            }
             items.push(<div key={key.join(".")} className="cm-key-translations">
                {content}
            </div>)
        }
        return <React.Fragment>
            {items}
        </React.Fragment>
    }

    return translationsFor(translations.en, [])

}

const components = {
    services: ServiceTranslations,
    purposes: PurposeTranslations,
    privacyPolicyUrl : PrivacyPolicyUrlTranslations,
    ui: UITranslations,
}

export const Translations = ({t, state, setState, config, updateConfig}) => {
    /*
    - We just show the hiearchy of translation values in the reference translations.
    - We need translations for the privacyUrl, the services and the purposes.
    */
    state = state || {tab: 'services'}
    const Component = components[state.tab]
    const tabs = Array.from(Object.entries(components)).map(([k, v]) => <Tab active={k === state.tab} onClick={() => setState({tab: k})} key={k}>{t(['translations', 'headers', k])}</Tab>)
    return <React.Fragment>
        <p className="cm-section-description">
            {t(['translations', 'description'])}
        </p>
        <Tabs>
            {tabs}
        </Tabs>
        <div className="cm-translations-fields">
            <Component t={t} config={config} updateConfig={updateConfig} />
        </div>
    </React.Fragment>
}